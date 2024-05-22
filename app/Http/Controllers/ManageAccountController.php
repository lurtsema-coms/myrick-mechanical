<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Storage;
use Illuminate\Support\Facades\Hash;


class ManageAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $data['users'] = User::leftJoin('users as creator', 'creator.id', 'users.created_by')
            ->leftJoin('users as updator', 'updator.id', 'users.updated_by')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.created_at',
                'users.updated_at',
                'creator.name as creator_name',
                'updator.name as updator_name'
            )
            ->where('users.id', '!=', $user_id)
            ->whereNull('users.deleted_at')
            ->get();
    
        return view('manage_account', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::insert([
            'name' => $request->input('first_name').' '.$request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $user_id,
        ]);

        return redirect()->back()->with('success', 'New account has been added.');

    }

    public function view ($id)
    {
        $accountInfo = User::where('id',$id)
        ->first();

        return $accountInfo;
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if(!($user->email == $request->input('edit_email'))){

            $request->validate([
                'email' => ['email', 'unique:users,email'],
            ]);

            $user->update([
                'email' => $request->input('edit_email')
            ]);
            
        }
        // Update user account basic credentials
        $user->update([
            'name' => $request->input('edit_name'),
        ]);
        // Change Password
        if ($request->has('password') && !empty($request->input('password'))) {
            // Update the password only if a new one is provided
                $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        return back()->with('success', 'User account has been updated successfully.');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function delete($id)
    {
        $user = User::withTrashed()->find($id);
        $user->delete();
        return true;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
