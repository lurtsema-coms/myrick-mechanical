<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[];
        $user_id = auth()->user()->id;

        $data['userInfo'] = User::where('id',$user_id)
        ->first();


        return view('profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);
        if (Hash::check($request->all()['current_password'], $user->password)) {

            $request->validate([

                'new_password' => 'required|min:8',
                'confirmation_password' => 'required|min:8|same:new_password'
            ]);

            $user->password = Hash::make($request->get('new_password'));
            $user->save();

            return redirect()->back()->with('successPassword', 'Password updated, you will be logged-out.');
        } else {
            return redirect()->back()->with('error', 'Note: Incorrect Current Password!');
        }
    }

    public function updateUsername (Request $request, $id)
    {
        $updatedName = $request->input('name');
        $updatedEmail = $request->input('email');

        User::where('id',$id)->update([
            'name' => $updatedName,
            'email' => $updatedEmail,
        ]);
        return redirect()->back()->with('successUsername', 'Succefully Changed Username And Email!');
    }

    public function profile_image(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png'
        ]);
        
        $imageName = auth()->user()->id.'.'.$request->photo->extension();
        $request->photo->move(public_path('profile_picture/img'), $imageName);
    
        $user = User::find(auth()->user()->id);
        $user->img = $imageName;
        $user->save();
    
        return response()->json(['success'=>'Image uploaded successfully.', 'photo_name'=>$user->img]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
