<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

use App\Models\Order;
use App\Models\Task;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\AuthCommand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $orders = Order::where('is_reviewed',0)->latest()->take(6)->get();
        $units = Unit::where('status',0)->latest()->take(6)->get();


        return view('dashboard.home',compact('orders','units'));
    }



    public function edit()
    {

        $user = auth()->user();
        return view('dashboard.edit',compact('user'));
    }

    public function update($id,Request $request)
    {
        $requests=$request->except('role');
        if(!is_null($request->password)){
            $requests['password']=Hash::make($request->password);
        }else{
            unset($requests['password']);
        }
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $user = User::find($id);
        $user->fill($requests)->save();
//        $user->syncRoles($request->role);
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.home'));
    }

}
