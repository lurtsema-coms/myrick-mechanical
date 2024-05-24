<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;


class WelcomeController extends Controller
{
    public function index()
    {
        $data=[];
        $data['Ads1'] = Ad::where('ad_placement', 'Placement 1')
            ->get();
        return view('welcome',$data);
    }
}
