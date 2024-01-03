<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use function App\Http\Controllers\activity;

class RoleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $roles = Role::all();

        return view('dashboard.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=new Role();
        $permissions = Permission::pluck('name', 'id');

        return view('dashboard.roles.create',compact('role','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $requests=$request->except('permissions');
        $role = Role::create($requests);
        $role->syncPermissions($request->permissions);
        $roleLog = $role->toArray();
        $permissionsString ='';
        foreach ($request->permissions as $permission){
            $permissionsString = $permissionsString . \App\Models\Permission::find($permission)->name;
        }
        $roleLog['permissions'] = $permissionsString;

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::pluck('name', 'id');

        return view('dashboard.roles.show',compact('role','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::pluck('name', 'id');

        return view('dashboard.roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        //return $request->permissions;

        $requests=$request->except('permissions');

        $role = Role::find($id);


        $role->fill($requests)->save();
        $role->syncPermissions($request->permissions);
        $permissionsString ='';
        foreach ($request->permissions as $permission){
            $permissionsString = $permissionsString . \App\Models\Permission::find($permission)->name. ' / ';
        }

        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (\DB::table('model_has_roles')->where('role_id',$id)->count() > 0){
            toast(__('Not allowed, Role used before'),'danger');
            return back();
        }
        $role= Role::findOrFail($id);

        $role->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.roles.index'));
    }
}