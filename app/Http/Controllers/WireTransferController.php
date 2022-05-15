<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WireTransferController extends Controller
{
    public function wireTransfer()
    {
        return view('dashboard.wire-transfer.wire-transfer');
    }

}
