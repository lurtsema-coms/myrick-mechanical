<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AppController extends Controller
{
    public function profile_image(Request $request){

        $request->validate([
            'photo' => 'required|mimes:jpeg'
        ]);
        
        $imageName = auth()->user()->id.'.'.$request->photo->extension();
        $request->photo->move(public_path('profile_picture/img'), $imageName);

        $user = User::find(auth()->user()->id);
        $user->img = $imageName;
        $user->save();

        return response()->json(['success'=>'Image uploaded successfully.', 'photo_name'=>$user->img]);
    }
}
