<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function Transportation()
    {
        return view('frontend.pages.Transportation');
    }
}
