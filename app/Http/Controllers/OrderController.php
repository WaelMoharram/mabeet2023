<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\website\AddOrderRequest;
use App\Models\Budget;
use App\Models\City;
use App\Models\Distance;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Season;
use App\Models\Unit;
use App\Models\UnitType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderController extends Controller
{

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display the user's profile.
     */
    public function index()
    {
//        return auth()->id();
        $cities = City::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        $seasons = Season::all();
        $distance = Distance::all();
        $orders = Order::with('offers')->withCount('offers');

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

        return view('website.orders.index', compact('cities', 'unitTypes', 'budgets', 'seasons', 'distance','orders'));
    }
    /**
     * Display the user's profile form.
     */
    public function create(): View
    {
        $cities = City::all();
        $seasons =Season::all();
        $distances = Distance::all();
        $unitTypes = UnitType::all();
        $budgets = Budget::all();
        return view('website.orders.create',compact('cities','seasons','distances','unitTypes','budgets'));
    }

    public function show():View
    {
//        $order = Order::findOrFail($order_id);
        return view('website.orders.details');
    }

    public function store(AddOrderRequest $request)
    {
        $requests = $request->all();
        $requests['user_id'] = Auth::id();
        if ($request->season_id == 0){
            $requests['season_id'] = null;
            $requests['date_from'] = $request->date_from;
            $requests['date_to'] = $request->date_to;
        }else{

            $requests['date_from'] = null;
            $requests['date_to'] = null;
        }
        if ($request->distance_id == 0){
            $requests['distance_id'] = null;
        }
        if ($request->budget_id == 0){
            $requests['budget_id'] = null;
        }
        Order::create($requests);

        toast(__('تمت الاضافة بنجاح - سيتم مراجعة طلبك قريبا'),'success');
        return redirect()->back();
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
