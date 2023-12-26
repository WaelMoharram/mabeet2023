<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $users = User::where(function ($q) use($request){
            // Name filter
            if ($request->has('name')  && $request->name != null  && $request->name != ''){
                $q->where('name','like', '%'.$request->name.'%');
            }

            // Email filter
            if ($request->has('email')  && $request->email != null  && $request->email != ''){
                $q->where('email','like', '%'.$request->email.'%');
            }
        });

        if(\request()->text){
            $users = $users->Search(\request()->text);
        }

        $users = $users->paginate(10);

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $user=new User();
        return view('dashboard.users.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $requests['password']=Hash::make($request->password);
        $user = User::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $user = User::findOrFail($id);

        return view('dashboard.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,UserRequest $request)
    {

        $requests=$request->except('role');
        if ($request->hasFile('image')) {

            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        if(!is_null($request->password)){
            $requests['password']=Hash::make($request->password);
        }else{
            unset($requests['password']);
        }
        $user = User::find($id);
        $user->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        if ($id == Auth::id()){
            toast(__('Can not delete yourself'),'danger');
            return back();
        }
        $user= User::findOrFail($id);
        $user->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.users.index'));
    }

    /**
     * Suspend user
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function suspend($id)
    {
        $user= User::findOrFail($id);
        $user->status==1? $user->update(['status'=>0]) :$user->update(['status'=>1]);
        toast(__('Suspend status successfully'),'success');
        return redirect(route('dashboard.users.index'));

    }

    /**
     * Switch between dark and light theme
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchTheme()
    {
        if (Auth::user()->guard(['admins'])->default_theme == 1){
            Admin::find(Auth::guard('admins')->id())->fill(['default_theme'=>0])->save();
        }else{
            Admin::find(Auth::guard('admins')->id())->fill(['default_theme'=>1])->save();
        }

        return back();
    }

}

?>
