<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class OrderController extends Controller
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

        $orders = Order::whereHas('statuses', function ($query)use ($request) {
            if ($request->has('status') && $request->status != null){
                $query->where('status', $request->status)
                    ->where('created_at', '=', function ($query) {
                        $query->selectRaw('MAX(created_at)')
                            ->from('order_statuses')
                            ->whereColumn('order_id', 'orders.id');
                    });
            }
        });
        $orders = $orders->paginate(15);
        return view('dashboard.orders.index', compact('orders'));
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


        $order= Order::findOrFail($id);
        $order->delete();
        toast(__('Deleted successfully'),'success');
        return redirect()->back();
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

    public function accept($id)
    {
        $order = Order::findOrFail($id);
        $order->is_reviewed = 1;
        $order->save();

        $status = new OrderStatus();
        $status->order_id = $order->id;
        $status->user_type = 'admin';
        $status->user_id = Auth::id();
        $status->status = Order::STATUS_APPROVED;
        $status->color = 'success';
        $status->save();

        toast(__('Order accepted successfully'),'success');


        return redirect()->back();
    }
}


