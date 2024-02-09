<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\AddUnitRequest;
use App\Http\Requests\website\UpdateUnitRequest;
use App\Models\Budget;
use App\Models\City;
use App\Models\Service;
use App\Models\Unit;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::where('user_id',auth()->id())->orderBy('id','desc')->get();
        return view('website.units.my-units',compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        $services = Service::all();
        return view('website.units.create',compact('cities','unitTypes','budgets','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUnitRequest $request)
    {

        $unitData = $request->except(['_token','image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'service_ids']);
        $unitData['user_id']=auth()->id();
        $budget = Budget::find($request->budget_id);
        $unitData['amount_from'] =$budget->amount_from;
        $unitData['amount_to'] =$budget->amount_to;
        for ($i =1 ; $i<=7;$i++){
            if ($request->hasFile('image'.$i)) {
                $unitData['image'.$i] = saveImage(request('image'.$i), 'images');
            }
        }

        $unit = Unit::create($unitData);

        foreach ($request->service_ids as $service_id){
            $unitServicesData[]= ['service_id'=>$service_id,'unit_id'=>$unit->id];
        }
        DB::table('service_unit')->insert($unitServicesData);

        session()->flash('success','تم ارسال الطلب بنجاح');
        return view('website.success',[
            'title'=>"تم ارسال الطلب بنجاح",
            'message'=>"بإمكانك عرض الوحدة السكنية في صفحة تفاصيل الوحدة السكنية لحين قبول الإضافة من الإدارة.",
            'route'=>route('units.show',$unit->id),
            'routeText'=>"عرض تفاصيل الوحدة"
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cities = City::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        $services = Service::all();
        $unit = Unit::findOrFail($id);
        return view('website.units.edit',compact('unit','cities','unitTypes','budgets','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, string $id)
    {
        $unit = Unit::findOrFail($id);
        $unitData = $request->except(['_token','image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'service_ids']);
        $budget = Budget::find($request->budget_id);
        $unitData['amount_from'] =$budget->amount_from;
        $unitData['amount_to'] =$budget->amount_to;
        $unitData['status'] =0;
        for ($i =1 ; $i<=7;$i++){
            if ($request->hasFile('image'.$i)) {
                if($unit['image'.$i] != null){
                    if (File::exists(public_path($unit['image'.$i]))) {
                        // Delete the file
                        File::delete(public_path($unit['image'.$i]));
                    }
                }
                $unitData['image'.$i] = saveImage(request('image'.$i), 'images');
            }
        }

        $unit->update($unitData);

        $unit->services()->sync($request->service_ids);

        session()->flash('success','تم ارسال طلب التعديل بنجاح');
        return view('website.success',[
            'title'=>"تم ارسال الطلب بنجاح",
            'message'=>"بإمكانك عرض الوحدة السكنية في صفحة تفاصيل الوحدة السكنية لحين قبول الإضافة من الإدارة.",
            'route'=>route('units.index'),
            'routeText'=>"عرض تفاصيل الوحدة"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
