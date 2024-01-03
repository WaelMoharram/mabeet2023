<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\UnitRequest;
use App\Models\Admin;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UnitController extends Controller
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

            $units = Unit::where(function ($q) use ($request) {
                // Name filter
                if ($request->has('name') && $request->name != null && $request->name != '') {
                    $q->where('name', 'like', '%' . $request->name . '%');
                }
                if ($request->has('unit_type_id') && $request->unit_type_id != null && $request->unit_type_id != '') {
                    $q->where('unit_type_id', $request->unit_type_id);
                }
                // Status filter
                if ($request->has('status') && $request->status != null && $request->status != '') {
                    $q->where('status', $request->status);
                }
            });

            $units = $units->paginate(10);

        return view('dashboard.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $unit=new Unit();
        return view('dashboard.units.create',compact('unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UnitRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image1')) {
            $requests['image1'] = saveImage($request->image1, 'images');
            $request->files->remove('image1');
        }
        if ($request->hasFile('image2')) {
            $requests['image2'] = saveImage($request->image2, 'images');
            $request->files->remove('image2');
        }
        if ($request->hasFile('image3')) {
            $requests['image3'] = saveImage($request->image3, 'images');
            $request->files->remove('image3');
        }
        if ($request->hasFile('image4')) {
            $requests['image4'] = saveImage($request->image4, 'images');
            $request->files->remove('image4');
        }
        if ($request->hasFile('image5')) {
            $requests['image5'] = saveImage($request->image5, 'images');
            $request->files->remove('image5');
        }
        if ($request->hasFile('image6')) {
            $requests['image6'] = saveImage($request->image6, 'images');
            $request->files->remove('image6');
        }
        if ($request->hasFile('image7')) {
            $requests['image7'] = saveImage($request->image7, 'images');
            $request->files->remove('image7');
        }
        $unit = Unit::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.units.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $unit = Unit::findOrFail($id);

        return view('dashboard.units.show',compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $unit = Unit::findOrFail($id);

        return view('dashboard.units.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,UnitRequest $request)
    {

        $requests=$request->except('role');
        if ($request->hasFile('image2')) {
            $requests['image2'] = saveImage($request->image2, 'images');
            $request->files->remove('image2');
        }
        if ($request->hasFile('image3')) {
            $requests['image3'] = saveImage($request->image3, 'images');
            $request->files->remove('image3');
        }
        if ($request->hasFile('image4')) {
            $requests['image4'] = saveImage($request->image4, 'images');
            $request->files->remove('image4');
        }
        if ($request->hasFile('image5')) {
            $requests['image5'] = saveImage($request->image5, 'images');
            $request->files->remove('image5');
        }
        if ($request->hasFile('image6')) {
            $requests['image6'] = saveImage($request->image6, 'images');
            $request->files->remove('image6');
        }
        if ($request->hasFile('image7')) {
            $requests['image7'] = saveImage($request->image7, 'images');
            $request->files->remove('image7');
        }

        $unit = Unit::find($id);
        $unit->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.units.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        $unit= Unit::findOrFail($id);
        $unit->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.units.index'));
    }



}

?>
