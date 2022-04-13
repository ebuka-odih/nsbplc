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

    public function all_users()
    {
        $users = User::where('user_role', 0)->get();
        return view('admin.users', compact('users'));
    }

    public function create()
    {
        return view('admin.add-user');
    }

    public function store_user(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'country' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'pass' => 'nullable',

            'gender' => 'nullable',
            'm_status' => 'nullable',
            'phone' => 'nullable',
            'dob' => 'nullable',
            'occupation' => 'nullable',
            'preferred_currency' => 'nullable',

        ]);

        if ($image = $request->file('avatar')){

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/profile_images/');
            $image->move($destinationPath, $input['imagename']);
            $user = new User();
            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->country = $request->get('country');
            $user->state = $request->get('state');
            $user->city = $request->get('city');
            $user->address = $request->get('address');

            $user->password = Hash::make($request['password']);
            $user->pass = $request->password;
            $user->avatar = $input['imagename'];
            $user->save();
            $this->autoCreate($user->id, $request['account_type']);

        }else{
            $data = $this->getData($request);
            $data['password'] = Hash::make($request['password']);
            $data['pass'] = $request->password;
            $user = User::create($data);
            $this->autoCreate($user->id, $request['account_type']);

        }
        return redirect()->route('admin.all_users');

    }

    public function user_detail($id)
    {
        $user_details = User::findOrFail($id);
        $user_deposit = User::with('transactions')->findOrFail($id);
        return view('admin.user-details', compact('user_details', 'user_deposit'));
    }

    public function personal_details($id)
    {
        $user_details = User::findOrFail($id);
        return view('admin.personal', compact('user_details'));
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

    protected function getData(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'country' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'pass' => 'nullable',

            'gender' => 'nullable',
            'm_status' => 'nullable',
            'phone' => 'nullable',
            'dob' => 'nullable',
            'occupation' => 'nullable',
            'preferred_currency' => 'nullable',
        ];

        return $request->validate($rules);
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

    public function personal_info_store(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->getUpdateData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }



    protected function getUpdateData(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
//            'email' => 'nullable|email|unique:users',
            'country' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'pass' => 'nullable',

            'gender' => 'nullable',
            'm_status' => 'nullable',
            'phone' => 'nullable',
            'dob' => 'nullable',
            'occupation' => 'nullable',
            'preferred_currency' => 'nullable',
        ];

        return $request->validate($rules);
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
