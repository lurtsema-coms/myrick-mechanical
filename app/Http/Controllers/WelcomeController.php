<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

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

    public function sendnotification()
    {
        $user=User::all();

        $details =[

            'greeting' => 'Hi laravel Developer',
            'body' => 'This is body',
            'actiontext' => 'testing',
            'actionurl' => '/',
            'lastline' => 'this is lastline',

        ];

        Notification::send($user, new SendEmailNotification($details));

        dd('done');
    }
}
