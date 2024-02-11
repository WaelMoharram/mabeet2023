<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\website\AddOrderRequest;
use App\Models\Budget;
use App\Models\City;
use App\Models\Distance;
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
    public function index(): View
    {
        $orders = [];
        return view('website.orders.index');
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
