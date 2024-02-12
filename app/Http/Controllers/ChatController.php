<?php

namespace App\Http\Controllers;

use App\Events\Chat;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Message;
use App\Models\Offer;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ChatController extends Controller
{
    /**
     * Home screen.
     */
    public function index(Request $request): View
    {
        $offer = null;
        if ($request->has('offer_id')) {
            $offer = Offer::findOrFail($request->offer_id);
        }
        if (Auth::User()->type == 'client') {

            $offers = Offer::whereHas('order', function ($q) {
                $q->where('user_id', Auth::id());
            })->get();
        }else{
            $offers = Offer::whereHas('messages')->whereHas('unit', function ($q) {
                $q->where('user_id', Auth::id());
            })->get();
        }



        return view('website.chat.index',compact('offers','offer'));
    }

    public function message(Request $request): bool{

        $message = new Message();
        $message->text = $request->text;
        $message->offer_id = $request->offer_id;
        $message->sender_id = Auth::id();
        $message->save();
        if ($message){

            event(new Chat($message->text , $message->sender_id , $message->created_at->format('h:i a') , $message->offer_id));
            return true;
        }
        return false;

    }

}
