<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Throwable;

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

        try {
            $reviews = Cache::remember('review_details', 60, function () {
                $response = Http::get('https://maps.googleapis.com/maps/api/place/details/json', [
                    'place_id' => env('GOOGLE_PLACE_ID'),
                    'fields' => 'reviews,rating,user_ratings_total',
                    'key' => env('GOOGLE_API_KEY'),
                    'reviews_sort' => 'newest',
                ]);

                return $response->successful() ? $response->json()['result'] : null;
            });
        } catch (Throwable $th) {
            $reviews = null;
        }
        $data['reviews'] = $reviews;
        return view('welcome', $data);
    }

    public function sendnotification()
    {
        $user = User::all();

        $details = [

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
