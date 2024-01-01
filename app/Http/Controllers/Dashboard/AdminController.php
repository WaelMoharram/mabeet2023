<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
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
    public function index(Request $request)
    {

        $admins = Admin::where(function ($q) use($request){

            // Name filter
            if ($request->has('name')  && $request->name != null  && $request->name != ''){
                $q->where('name','like', '%'.$request->name.'%');
            }

            // Email filter
            if ($request->has('email')  && $request->email != null  && $request->email != ''){
                $q->where('email','like', '%'.$request->email.'%');
            }

            // Phone filter
            if ($request->has('phone')  && $request->phone != null  && $request->phone != ''){
                $q->where('phone','like', '%'.$request->phone.'%');
            }

            //Role filter
            if ($request->has('role')  && $request->role != null  && $request->role != ''){
                $q->whereHas('roles',function ($q) use($request){
                    $q->where('name',$request->role);
                });
            }
        })->paginate(15);
        return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $admin=new Admin();
        $roles = Role::pluck('name', 'id');

        return view('dashboard.admins.create',compact('admin','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AdminRequest $request)
    {

        $requests=$request->except('role');
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $requests['password']=Hash::make($request->password);
        $admin = Admin::create($requests);
        $admin->syncRoles($request->role);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.admins.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $admin = Admin::findOrFail($id);
        $roles = Role::pluck('name', 'id');

        return view('dashboard.admins.show',compact('admin','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $admin = Admin::findOrFail($id);
        $roles = Role::pluck('name', 'id');

        return view('dashboard.admins.edit',compact('admin','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,AdminRequest $request)
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
        $admin = Admin::find($id);
        $admin->fill($requests)->save();
        $admin->syncRoles($request->role);

        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.admins.index'));
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
        $admin= Admin::findOrFail($id);
        $admin->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.admins.index'));
    }
    /**
     * Switch between dark and light theme
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchTheme()
    {
        if (Auth::user()->default_theme == 1){
            Admin::find(Auth::id())->fill(['default_theme'=>0])->save();
        }else{
            Admin::find(Auth::id())->fill(['default_theme'=>1])->save();
        }

        return back();
    }
}


