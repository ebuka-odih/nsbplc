<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Notifications\LoanAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class LoanController extends Controller
{

    public function index()
    {
        $loans = Loan::whereUserId(auth()->id())->paginate(5);
        return view('dashboard.loans', compact('loans'));
    }

    public function create()
    {
        return view('dashboard.create-loan');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        $data = Loan::create($data);
        Notification::send($data->user->email, new LoanAlert($data));
        return redirect()->back()->with('success', "Loan Requested Successfully, We Will Get Back To You");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'loan_type' => 'required',
            'currency' => 'required',
            'desc' => 'required',
        ];
        return $request->validate($rules);
    }
}
