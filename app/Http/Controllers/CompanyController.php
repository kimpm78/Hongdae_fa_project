<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function info()
    {
        return view('company-info'); // resources/views/company-info.blade.php
    }
}
