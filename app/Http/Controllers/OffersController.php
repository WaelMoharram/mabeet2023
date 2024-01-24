<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        return view('website.offers.index');
    }

    public function show()
    {
//        $offer = Order::findOrFail($offer_id);
        return view('website.offers.details');
    }
}
