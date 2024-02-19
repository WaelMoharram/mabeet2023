<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use function App\Http\Controllers\activity;

class CountryController extends Controller
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
        $countries = Country::where(function ($q) use($request){
            //name filter
            if ($request->has('name') && $request->name != null) {
                $q->where('name', 'like', '%'.$request->name.'%');
            }

        })->get();

        return view('dashboard.countries.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=new Country();

        return view('dashboard.countries.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $country = Country::create($requests);


        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.countries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('dashboard.countries.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return view('dashboard.countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        //return $request->permissions;

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $country = Country::find($id);


        $country->fill($requests)->save();


        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $country= Country::findOrFail($id);

        $country->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.countries.index'));
    }
}
