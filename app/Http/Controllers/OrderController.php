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
use Illuminate\Support\Facades\DB;
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


        if(request()->has('status') && \request()->status == 'current'){
            $orders = $orders->whereHas('statuses', function ($query) {
                $query->where(function ($query) {
                    $query->whereNotExists(function ($subquery) {
                        $subquery->select(DB::raw(1))
                            ->from('order_statuses')
                            ->whereRaw('order_statuses.order_id = orders.id')
                            ->whereIn('order_statuses.status', [Order::STATUS_REJECTED,Order::STATUS_CANCELED,Order::STATUS_COMPLETED]);
                    });
                });
            });
        }

        if(request()->has('status') && \request()->status == 'previous'){
            $orders = $orders->whereHas('statuses', function ($query) {
                $query->whereIn('status', [Order::STATUS_REJECTED,Order::STATUS_CANCELED,Order::STATUS_COMPLETED]);
            });
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

        $orders = $orders->orderByDesc('created_at')->where('user_id',Auth::id())->get();

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

    public function show($id):View
    {
        $order = Order::findOrFail($id);
        // provider units should be the same city of order .
        $offers = $order->offers()->get();
        return view('website.orders.details',compact('order','offers'));
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
        $order = Order::create($requests);

        $order->statuses()->create([
            'order_id' => $order->id,
         'status' => Order::STATUS_NEW,
            'user_type'=>'user',
            'user_id' =>\auth()->id(),
            'color'=>'success'
        ]);

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

    public function accept($id){
        $offer = Offer::find($id);
        Offer::where('order_id',$offer->order_id)->update('status',Offer::REJECTED_OFFER);
        $offer->update(['status'=>Offer::ACCEPTED_OFFER]);
        toast(__('Offer accepted'),'success');
        return redirect()->back();
    }

}
