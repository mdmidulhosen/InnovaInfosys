<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function PrivacyPolicy()
    {
        return view('frontend.pages.PrivacyPolicy');
    }
}
