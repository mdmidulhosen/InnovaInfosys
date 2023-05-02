<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturingController extends Controller
{
    public function Manufacturing()
    {
        return view('frontend.pages.Manufacturing');
    }
}
