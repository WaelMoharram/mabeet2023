<?php
namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        Cookie::queue('type',request()->type);


        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleGoogleCallback()
    {
        try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // Retrieve user_type from the session
            $userType = Cookie::get('type');

            // if the user exits, use that user and login
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/');
            }else{
                //user is not yet created, so create first
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt(''),
                    'type' =>$userType,
                ]);

                //login as the new user
                Auth::login($newUser);
                // go to the dashboard
                return redirect('/');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function login()
    {
        return view('website.auth.login-register-phone');
    }

    public function postLogin(LoginRequest $request)
    {
        $user = User::firstOrCreate(
            ['phone' => request('phone')],
            ['type' =>  request('type')],
        );
        $user->update(['verify_code'=>rand(0000,9999)]);

        \session()->flash("success",'Verify your phone.');
        return redirect()->route('verify',['phone'=>request('phone')]);
    }

    public function viewVerification($phone)
    {
        return view('website.auth.verification',compact('phone'));
    }

    public function verifyAndLogin(Request $request,$phone)
    {
        $user = User::where('phone',$phone)->where('verify_code',$request->verify_code)->first();
        if(!$user){

            return redirect()->route('verify',['phone'=>$phone])->with('error','الكود غير صحيح');
        }
        \auth()->login($user);
        return redirect()->route('home');
    }
}
