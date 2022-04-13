<?php

namespace App\Http\Controllers;

use App\Mail\CardRequest;
use App\RequestCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestCardController extends Controller
{
    //
    public function card()
    {
        $card_count = RequestCard::all()->count();
        return view('dashboard.request-card', compact( 'card_count'));
    }

    public function cardHistory()
    {
        $cards = RequestCard::whereUserId(\auth()->id())->get();
        return view('dashboard.card-history', compact('cards'));
    }

    public function storeCard(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = Auth::id();
        $card = RequestCard::create($data);

        $data = ['card' => $card];
        Mail::to($card->user->email)->send( new CardRequest($data));
        return redirect()->back()->with('success', 'Request Sent Successful');
    }


    protected function getData(Request $request)
    {
        $rules = [
            'nickname' => "required",
            'card_type' => "required",
            'note' => "required",
        ];
        return $request->validate($rules);
    }

}
