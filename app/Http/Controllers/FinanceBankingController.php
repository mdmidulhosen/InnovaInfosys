<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceBankingController extends Controller
{
    public function financeBanking()
    {
        return view('frontend.pages.FinanceBanking');
    }
}
