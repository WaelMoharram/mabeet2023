<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeasonRequest;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use function App\Http\Controllers\activity;

class SeasonController extends Controller
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
        $seasons = Season::where(function ($q) use($request){

            //name filter
            if ($request->has('name') && $request->name != null) {
                $q->where('name', 'like', '%'.$request->name.'%');
            }
            //date from filter
            if ($request->has('date_from') && $request->date_from != null) {
                $q->where('date_from', '>=', $request->date_from);
            }
            //date to filter
            if ($request->has('date_to') && $request->date_to != null) {
                $q->where('date_to', '<=', $request->date_to);
            }
        })->get();

        return view('dashboard.seasons.index',compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $season=new Season();

        return view('dashboard.seasons.create',compact('season'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonRequest $request)
    {
        $requests=$request->all();
        $season = Season::create($requests);


        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.seasons.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $season = Season::findOrFail($id);

        return view('dashboard.seasons.show',compact('season'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season = Season::findOrFail($id);

        return view('dashboard.seasons.edit',compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeasonRequest $request, $id)
    {
        //return $request->permissions;

        $requests=$request->all();

        $season = Season::find($id);


        $season->fill($requests)->save();


        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.seasons.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $season= Season::findOrFail($id);

        $season->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.seasons.index'));
    }
}
