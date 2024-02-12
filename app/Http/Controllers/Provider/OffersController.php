<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\City;
use App\Models\Distance;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Season;
use App\Models\UnitType;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
//        return auth()->id();
        $cities = City::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        $seasons = Season::all();
        $distance = Distance::all();
        $orders = Order::where('is_reviewed', 1)->with('offers')->withCount('offers');

        if(request()->has('status') && \request()->status == 'offers'){
            $orders = $orders->whereHas('offers', function ($query) {
                $query->where('provider_id', '=', auth()->id())->where('status',Offer::NEW_OFFER);
            });
        }

        elseif(request()->has('status') && \request()->status == 'current'){
            $orders = $orders->whereHas('offers', function ($query) {
                $query->where('provider_id', '=', auth()->id())->where('status',Offer::ACCEPTED_OFFER); // Assuming '1' means 'accepted'
            });
        }

        elseif(request()->has('status') && \request()->status == 'previous'){
            $orders = $orders->whereHas('offers', function ($query) {
                $query->where('provider_id', '=', auth()->id())->whereIn('status',[Offer::REJECTED_OFFER,Offer::COMPLETED_OFFER]); // Assuming '2' means 'completed'
            });
        }

        else{
            $orders = $orders->whereHas('offers', function ($query) {
                $query->where('status', '=', Offer::NEW_OFFER);
                $query->where('provider_id',"!=",auth()->id());
            })->orWhereDoesntHave('offers');
        }

        if (request()->has('cities_ids')) {
            $orders = $orders->whereIn('city_id', request()->cities_ids);
        }

        if (request()->has('unit_types_ids')) {
            $orders = $orders->whereIn('unit_type_id', request()->unit_types_ids);
        }

        if (request()->has('distances_ids')) {
            $orders = $orders->whereIn('distance_id', request()->distances_ids);
        }

        if (request()->has('guest_number')) {
            $orders = $orders->whereIn('guest_number', request()->guest_number);
        }

        if (request()->has('budgets_ids')) {
            $orders = $orders->whereIn('budgets_id', request()->budgets_id);
        }

        $orders = $orders->get();

        return view('website.provider-offers.index', compact('cities', 'unitTypes', 'budgets', 'seasons', 'distance','orders'));
    }

    public function show($id)
    {
        return view('website.provider-offers.details');
    }
}
