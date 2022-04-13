<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\RequestDeposit;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    //
    public function deposit()
    {
        return view('dashboard.deposit');
    }

    public function depositHistory()
    {
        $deposits = Deposit::whereUserId(\auth()->id())->get();
        return view('dashboard.deposit-history', compact('deposits'));
    }

    public function storeDeposit(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = Auth::id();
        $deposit = Deposit::create($data);
        $data = ['withdraw' => $deposit];
//        Mail::to(\auth()->user()->email)->send(new RequestDeposit($dep));
//        Mail::to('admin@nsbplc.com')->send(new RequestDeposit($dep));
        return redirect()->route('user.payment', $deposit->id);
    }

    protected function getData(Request $request)
    {
        $rules = [
          'amount' => 'required',
          'payment_method' => 'required',
          'note' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function payment($id)
    {
       $deposit = Deposit::findOrFail($id);
       return view('dashboard.payment', compact('deposit'));
    }

}
