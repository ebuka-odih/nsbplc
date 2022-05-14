<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use App\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function dashboard()
    {
        $credit = Withdrawal::whereUserId(\auth()->id())->select('amount')->where('acct_number', '=', Auth::user()->account->account_number)->where('status', '=', 1)->whereDate('created_at', Carbon::today())->sum('amount');
        $debit = Withdrawal::whereUserId(\auth()->id())->select('amount')->where('from', '=', Auth::user()->account->account_number)->where('status', '=', 1)->whereDate('created_at', Carbon::today())->sum('amount');

        $pending_debit = Withdrawal::whereUserId(\auth()->id())->select('amount')->where('debit', '=', 1)->where('status', '=', 0)->sum('amount');

        $transactions = Withdrawal::whereUserId(auth()->id())->paginate(4);
        $total_trans = Withdrawal::whereUserId(auth()->id())->get()->count();
        return view('dashboard.index', compact('debit', 'total_trans', 'transactions', 'pending_debit', 'credit'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function editProfile($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.edit-profile', compact('user'));
    }

    public function password()
    {
        return view('dashboard.password');
    }

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }

}
