<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Page;
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


}
