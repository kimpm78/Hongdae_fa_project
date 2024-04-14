<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function showRefund()
    {
        return view('refund');
    }
}
