<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Offer;
use App\Models\Page;
use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Home screen.
     */
    public function index(): View
    {
//        foreach(Offer::all() as $offer){
//            $unit = Unit::find($offer->unit_id);
//            $offer->provider_id = $unit->user_id ?? 0;
//            $offer->save();
//
//        }
//        return 'done';
        return view('website.home');
    }

    public function page($title){
        $page = Page::where('title->ar',$title)->orWhere('title->en',$title)->first();
        if(!$page){
            abort(404);
        }
        return view('website.page',compact('page'));

    }

}
