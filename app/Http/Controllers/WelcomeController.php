<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;


class WelcomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['Ads1'] = Ad::where('ad_placement', 'Placement 1')
            ->whereNull('deleted_at')
            ->where('from_date', '<=', date('Y-m-d'))
            ->where('to_date', '>=', date('Y-m-d'))
            ->get();
        return view('welcome', $data);
    }
}
