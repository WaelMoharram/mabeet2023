<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\City;
use App\Models\Season;
use App\Models\UnitType;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index(){
        $cities = City::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        $seasons = Season::all();
        return view('website.provider-offers.index',compact('cities','unitTypes','budgets','seasons'));
    }

    public function show($id){
        return view('website.provider-offers.details');
    }
}
