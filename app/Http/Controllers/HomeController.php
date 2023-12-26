<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Page;
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
