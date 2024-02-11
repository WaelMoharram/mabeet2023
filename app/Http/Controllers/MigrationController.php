<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\BookingOld;
use App\Models\FacilityUnit;
use App\Models\Offer;
use App\Models\Page;
use App\Models\ServiceUnit;
use App\Models\TownOld;
use App\Models\UnitImageOld;
use App\Models\UnitOld;
use App\Models\UnitType;
use App\Models\User;
use App\Models\UserOld;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MigrationController extends Controller
{
    /**
     * Home screen.
     *
     */
    public function users(): string
    {
        $oldUsers = UserOld::all();
        foreach ($oldUsers as $oldUser) {
//            $user = User::where('phone', $oldUser->phone)->first();
//            $user->created_at = $oldUser->created_at;
//            $user->save();
            #############################
//            $user = new User();
//            $user->created_at = $oldUser->created_at;
//            $user->name = $oldUser->name;
//            $user->email = $oldUser->email;
//            $user->password = $oldUser->password;
//            if ($oldUser->type == 1) {
//                $user->type = 'client';
//            } else {
//                $user->type = 'provider';
//            }
//            $user->phone = $oldUser->phone;
//            $user->gender = $oldUser->gender;
//            $user->save();
        }
        return 'done';
    }

    public function towns()
    {
        $old =TownOld::all();
        foreach ($old as $item){
            $town = new \App\Models\Neighborhood();
            $town->id = $item->id;
            $town->city_id = 1;
            $town->setTranslation('name', 'en', $item->name);
            $town->setTranslation('name', 'ar', $item->name);
            $town->save();
        }
        return 'done';
    }

    public function homes()
    {
        $old = UnitOld::all();
        foreach ($old as $item){
//            return UnitImageOld::where('home_id',$item->id)->get();
            $lat = 0;
            $lng = 0;
            if ($item->map_cord != null){
                list($lat, $lng) = explode(',', $item->map_cord);

            }
            $home = new \App\Models\Unit();
            $home->id = $item->id;
            $home->user_id = $item->user_id;
            $home->neighborhood_id = $item->town_id;
            $home->city_id = 1;
            $home->name  =  $item->title;
            $home->description = $item->description  ??'';
            $home->lat = $lat;
            $home->lng = $lng;
            $home->amount = $item->price;
            $unitType = UnitType::where('name->en', $item->type)->first();
            if (!$unitType){
                $unitType = new UnitType();
                $unitType->setTranslation('name', 'en', $item->type);
                $unitType->setTranslation('name', 'ar', $item->type);
                $unitType->save();
            }
            $home->unit_type_id =$unitType->id;
            $home->status = $item->is_approved;
            $i =1;
            foreach (UnitImageOld::where('home_id',$item->id)->get() as $image){
                $propertyName = 'image' . $i;
//                $image = $home->{$propertyName};
                if ($i <8){
                    $home->{$propertyName} = 'old_uploads/homes/'.$image->path;
                }
                $i++;
            }
            $home->save();


        }
    }

    public function options(){
        foreach (UnitOld::all() as $oldUnits){
            $array = json_decode($oldUnits->amenities);
            $home = \App\Models\Unit::find($oldUnits->id);
            FacilityUnit::create([
                'unit_id'=>$home->id,
                'facility_id'=>1,
                'amount'=>$oldUnits->rooms_count,
            ]);
            FacilityUnit::create([
                'unit_id'=>$home->id,
                'facility_id'=>2,
                'amount'=>$oldUnits->kitchens_count,
            ]);
            FacilityUnit::create([
                'unit_id'=>$home->id,
                'facility_id'=>3,
                'amount'=>$oldUnits->bathrooms_count,
            ]);
            FacilityUnit::create([
                'unit_id'=>$home->id,
                'facility_id'=>4,
                'amount'=>$oldUnits->elevators_count,
            ]);
            if (isset($array->bed) && $array->bed == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>1,
                ]);
            }
            if (isset($array->water_cooler) && $array->water_cooler == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>2,
                ]);
            }
            if (isset($array->wifi) && $array->wifi == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>3,
                ]);
            }
            if (isset($array->sitting) && $array->sitting == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>4,
                ]);
            }
            if (isset($array->air_condition) && $array->air_condition == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>5,
                ]);
            }
            if (isset($array->cleaning) && $array->cleaning == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>6,
                ]);
            }
            if (isset($array->tv) && $array->tv == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>7,
                ]);
            }
            if (isset($array->heater) && $array->heater == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>8,
                ]);
            }
            if (isset($array->washer) && $array->washer == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>9,
                ]);
            }
            if (isset($array->fridge) && $array->fridge == 1){
                ServiceUnit::create([
                    'unit_id'=>$home->id,
                    'service_id'=>10,
                ]);
            }

        }
        return 'DONE';

    }

    public function orders()
    {
        $old = BookingOld::all();

        foreach ($old as $item){
//            dd($item->home);
            $order = new \App\Models\Order();
            $order->id = $item->id;
            $order->user_id = $item->user_id;
            $order->city_id = 1;
            $order->season_id = 0;
            $order->name = $item->home->title ?? '';
            $order->description = $item->home->description ?? '';
            $order->unit_type_id = 1;//
            $order->unit_number = 1;
            $order->guest_number = $item->home->guests_count ?? 1;
            $order->is_reviewed = 1;
            $order->save();
            $offer = new Offer();
            $offer->order_id = $order->id;
            $offer->unit_id = $item->home_id;
            $offer->price = $item->amount;
            $offer->status = 1;
            $offer->save();
            
        }
    }

}
