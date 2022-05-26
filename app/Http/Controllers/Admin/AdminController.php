<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\CardRequest;
use App\Notifications\FundAccount;
use App\RequestCard;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{

    public function dashboard()
    {
        $deposits = Deposit::all()->count();
        $withdrawal = Withdrawal::all()->count();
        $users = User::all()->where('admin', 0)->count();
        return view('admin.dashboard', compact('deposits','withdrawal', 'users'));
    }



    public function user_detail($id)
    {
        $user_details = User::findOrFail($id);
        $user_deposit = User::with('transactions')->findOrFail($id);
        return view('admin.user-details', compact('user_details', 'user_deposit'));
    }


    public function fund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
        $user = User::findOrFail($id);
        $account = Account::whereUserId($id)->first();
        $account->balance += $add_amt;
        $account->balance2 += $add_amt;
        $data = [ 'account' => $account, 'add_amt' => $add_amt, 'user' => $user];
//        $user->notify(new FundAccount($data))->toMail($user->email);
        Notification::route('mail', $user->email)->notify(new FundAccount($data));
        $account->save();
        return redirect()->back()->with('fund_success', "Account has been funded successfully");

    }
    public function defund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
//        $user = User::findOrFail($id);
        $account = Account::whereUserId($id)->first();
        $account->balance -= $add_amt;
        $account->balance2 -= $add_amt;

        $account->save();
        return redirect()->back()->with('defund_account', "Account has been defunded successfully");

    }



    public function approve_user($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('success', "User Has Been Verified");
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', "User Deleted");
    }

    public function edit_user($id)
    {
        $user_details = User::findOrFail($id);
        return view('admin.edit-user', compact('user_details'));
    }




    public function cards()
    {
        $cards = RequestCard::all();
        return view('admin.cards', compact('cards'));
    }

    public function delete_card($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->delete();
        return redirect()->back();
    }

    public function reject_card($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->status = 1;
        $card->save();
        return redirect()->back();
    }



}
