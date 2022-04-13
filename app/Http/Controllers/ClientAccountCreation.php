<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientAccountCreation extends Controller
{
    //

    public function new_account(Request $request)
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
            'address_2' => 'nullable',
            'pass' => 'nullable',

            'title' => 'nullable',
            'gender' => 'nullable',
            'm_status' => 'nullable',
            'phone' => 'nullable',
            'date_of_birth' => 'nullable',
            'occupation' => 'nullable',
            'preferred_currency' => 'nullable',

            'annual_salary' => 'nullable',
            'position' => 'nullable',
            'office_address' => 'nullable',
            'office_name' => 'nullable',
            'employer_name' => 'nullable',

            'cus_identification' => 'nullable',
            'cus_expiry' => 'nullable',
            'cus_idnumber' => 'nullable',
            'cus_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = new User();

        if ($request->hasFile('avatar')){

            $image = $request->file('avatar');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/profile_images');
            $image->move($destinationPath, $input['imagename']);

//            $image = $request->file('cus_image');
//            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/cus_image');
//            $image->move($destinationPath, $input['cus_image']);


            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->country = $request->get('country');
            $user->state = $request->get('state');
            $user->city = $request->get('city');
            $user->address = $request->get('address');
            $user->address_2 = $request->get('address_2');

            $user->title = $request->get('title');
            $user->gender = $request->get('gender');
            $user->m_status = $request->get('m_status');
            $user->phone = $request->get('phone');
            $user->date_of_birth = $request->get('date_of_birth');
            $user->occupation = $request->get('occupation');
            $user->preferred_currency = $request->get('preferred_currency');
            $user->account_type = $request->get('account_type');

            $user->annual_salary = $request->get('annual_salary');
            $user->position = $request->get('position');
            $user->office_address = $request->get('office_address');
            $user->office_name = $request->get('office_name');
            $user->employer_name = $request->get('employer_name');

            $user->cus_identification = $request->get('cus_identification');
            $user->cus_expiry = $request->get('cus_expiry');
            $user->cus_idnumber = $request->get('cus_idnumber');
            $user->cus_image = $request->get('cus_image');

            $user->password = Hash::make($request['password']);
            $user->pass = $request->password;
            $user->avatar = $input['imagename'];
//            $user->cus_image = $input['cus_image'];
            $user->save();
            $this->autoCreate($user->id, $request['account_type']);
            return redirect()->route('login')->with('success', "Your Account Details Has Been Submitted Successfully, Check your mail for other instructions");

        }else{

            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->email = $request->get('email');
            $user->country = $request->get('country');
            $user->state = $request->get('state');
            $user->city = $request->get('city');
            $user->address = $request->get('address');
            $user->address_2 = $request->get('address_2');

            $user->title = $request->get('title');
            $user->gender = $request->get('gender');
            $user->m_status = $request->get('m_status');
            $user->phone = $request->get('phone');
            $user->date_of_birth = $request->get('date_of_birth');
            $user->occupation = $request->get('occupation');
            $user->preferred_currency = $request->get('preferred_currency');
            $user->account_type = $request->get('account_type');

            $user->annual_salary = $request->get('annual_salary');
            $user->position = $request->get('position');
            $user->office_address = $request->get('office_address');
            $user->office_name = $request->get('office_name');
            $user->employer_name = $request->get('employer_name');

            $user->cus_identification = $request->get('cus_identification');
            $user->cus_expiry = $request->get('cus_expiry');
            $user->cus_idnumber = $request->get('cus_idnumber');
            $user->cus_image = $request->get('cus_image');

            $user->password = Hash::make($request['password']);
            $user->pass = $request->password;
            $user->save();
            $this->autoCreate($user->id, $request['account_type']);
            return redirect()->route('login')->with('success', "Your Account Details Has Been Submitted Successfully, Check your mail for other instructions");
        }

    }

    public function wait()
    {
        return view('pages.wait');
    }

}
