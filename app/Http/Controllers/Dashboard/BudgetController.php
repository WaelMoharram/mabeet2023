<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BudgetRequest;
use App\Models\Budget;
use Illuminate\Http\Request;
use function App\Http\Controllers\activity;

class BudgetController extends Controller
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
        $budgets = Budget::where(function ($q) use($request){
            //name filter
            if ($request->has('name') && $request->name != null) {
                $q->where('name', 'like', '%'.$request->name.'%');
            }

        })->get();

        return view('dashboard.budgets.index',compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budget=new Budget();

        return view('dashboard.budgets.create',compact('budget'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BudgetRequest $request)
    {
        $requests=$request->all();

        $budget = Budget::create($requests);


        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.budgets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = Budget::findOrFail($id);

        return view('dashboard.budgets.show',compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::findOrFail($id);

        return view('dashboard.budgets.edit',compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BudgetRequest $request, $id)
    {
        //return $request->permissions;

        $requests=$request->all();
        $budget = Budget::find($id);


        $budget->fill($requests)->save();


        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.budgets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $budget= Budget::findOrFail($id);

        $budget->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.budgets.index'));
    }
}
