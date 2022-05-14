<?php

namespace App\Http\Controllers;

use App\Account;
use App\Mail\CreditAlert;
use App\Mail\DebitAlert;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{

    public function process($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process', compact('with_dt'));
    }


    public function withdraw()
    {
        return view('dashboard.transfer');
    }

    public function withdrawHistory()
    {
        $withdraw = Withdrawal::whereUserId(\auth()->id())->get();
        return view('dashboard.withdraw-history', compact('withdraw'));
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        if($request->trans_type == "Internal"){
            $account_number = $request->input('acct_number');
            $user_acct = Account::where('account_number', $account_number)->first();

            if ($user_acct){
                if ($data['amount'] > Auth::user()->account->balance){
                    return redirect()->back()->with('declined', 'You do not have enough money in your account to make a transfer');
                }

                if ($account_number != auth()->user()->account->account_number){
                    $data['user_id'] = Auth::id();
                    $data['account_id'] = Auth::user()->account->id;
                    $data['from'] = Auth::user()->account->account_number;
                    $data = Withdrawal::create($data);
                }else{
                    return redirect()->back()->with('illicit', 'Illicit Transaction');
                }

            }else{
                return redirect()->back()->with('not_found', "Sorry! No Such Account Number");
            }

        }

        if($request->trans_type == "Local"){
            if ($data['amount'] > Auth::user()->account->balance){
                return redirect()->back()->with('declined', 'Insufficient Balance');
            }
            $data['user_id'] = Auth::id();
            $data['from'] = Auth::user()->account->account_number;
            $data = Withdrawal::create($data);
        }

        if($request->trans_type == "International"){
            if ($data['amount'] > Auth::user()->account->balance){
                return redirect()->back()->with('declined', 'You do not have enough money in your account to make a transfer');
            }
            $data['user_id'] = Auth::id();
            $data['from'] = Auth::user()->account->account_number;
            $data = Withdrawal::create($data);
        }

        return redirect()->route('user.processAtcCode', $data->id);
    }

    protected function getData(Request $request)
    {
        $rules = [
            'id' => 'nullable',
            'from' => 'nullable',
            'user_id' => 'nullable',
            'amount' => 'required',
            'acct_number' => 'required',
            'rep_name' => 'required',
            'account_type' => 'required',
            'bank_name' => 'required',
            'swift_code' => 'nullable',
            'note' => 'nullable',
            'trans_type' => 'required',
            'credit_type' => 'nullable',
            'vat' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function processAtcCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process-withdrawal', compact('with_dt'));
    }

    public function atcCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.atc_code', compact('with_dt'));
    }

    public function atcStore(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->atc_code == $withdrawal->admin_atc_code){
            $withdrawal->atc_code = $request->get('atc_code');
            $withdrawal->status = 1;
            $withdrawal->save();
            return redirect()->route('user.processOtp', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right digits.");
    }

    public function processOtp($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process-otpcode', compact('with_dt'));

    }

    public function otpCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.otp-code', compact('with_dt'));
    }

    public function otpStore(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->otp == $withdrawal->admin_otp)
        {
            $withdrawal->otp = $request->get('otp');
            $withdrawal->status = 1;
            $withdrawal->save();
            return redirect()->route('user.processTrn', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right digits.");

    }

    public function processTrn($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process-trn', compact('with_dt'));
    }

    public function trnCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.trn-code', compact('with_dt'));
    }

    public function trn_code_store(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->trn == $withdrawal->admin_trn)
        {
            $withdrawal->trn = $request->get('trn');
            $withdrawal->status = 1;
            $withdrawal->save();

            $account_number = $request->input('acct_number');
            $user_acct = Account::where('account_number', $account_number)->first();

            if ($user_acct){

                    if ($withdrawal->status == 1){
                        $user_acct->balance += $withdrawal->amount;

                        $new_balance = Auth::user()->account->balance -= $withdrawal->amount;
                        Auth::user()->account->update(['balance' => $new_balance]);

                        $vat = $withdrawal->amount * 0.5 / 100;

                        $withdrawal->update(['vat' => $vat, 'debit' => 1]);
                        auth()->user()->account->balance -= $vat;
                        auth()->user()->save();
//                    $data->status = 1;
                        $withdrawal->save();
                        $user_acct->save();

                        $user = Auth::user();
                        $mail_data = ['user' => $user, 'transaction' => $withdrawal];
                        $credit_data = ['user' => $user, 'transaction' => $withdrawal];

                        Mail::to($user_acct->user->email)->send(new CreditAlert($credit_data));
                        Mail::to($user->email)->send(new DebitAlert($mail_data));

                        $basic  = new \Nexmo\Client\Credentials\Basic('4575113b', 'dLzP63ADeGlxkKux');
                        $client = new \Nexmo\Client($basic);

                        $message = $client->message()->send([
                            'to' => '+2348165626483',
                            'from' => 'Nexmo',
                            'text' => 'A text message sent using the Nexmo SMS API'
                        ]);

                    }

            }

            return redirect()->route('user.with_process', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right digits.");
    }




    public function withdrawal_details($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        if ( $with_dt->atc_code == null){
            return redirect()->route('user.atcCode', $with_dt->id);
        }elseif($with_dt->otp == null){
            return redirect()->route('user.otpCode', $with_dt->id);
        }elseif($with_dt->trn == null){
            return redirect()->route('user.trnCode', $with_dt->id);
        }
        return view('dashboard.transaction-details', compact('with_dt'));
    }



    public function testSMS()
    {
        $account = app('SMSFactor\Message');
        $response = $account->send([
            'to' => '+2347048933027',
            'text' => 'Have you ever danced with the devil in the pale moonlight ???'
        ]);
        print_r($response->getJson());
    }









}
