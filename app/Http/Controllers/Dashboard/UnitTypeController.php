<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UnitTypeRequest;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use function App\Http\Controllers\activity;

class UnitTypeController extends Controller
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
    public function index(Request $request)
    {
        $unitTypes = UnitType::where(function ($q) use($request){
            //name filter
            if ($request->has('name') && $request->name != null) {
                $q->where('name', 'like', '%'.$request->name.'%');
            }

        })->get();

        return view('dashboard.unit-types.index',compact('unitTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unitType=new UnitType();

        return view('dashboard.unit-types.create',compact('unitType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitTypeRequest $request)
    {
        $requests=$request->all();
        $unitType = UnitType::create($requests);


        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.unit-types.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unitType = UnitType::findOrFail($id);

        return view('dashboard.unit-types.show',compact('unitType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitType = UnitType::findOrFail($id);

        return view('dashboard.unit-types.edit',compact('unitType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnitTypeRequest $request, $id)
    {
        //return $request->permissions;

        $requests=$request->all();

        $unitType = UnitType::find($id);


        $unitType->fill($requests)->save();


        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.unit-types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $unitType= UnitType::findOrFail($id);

        $unitType->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.unit-types.index'));
    }
}
