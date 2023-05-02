<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthCareController extends Controller
{
    public function Healthcare()
    {
        return view('frontend.pages.HealthCare');
    }
}
