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
        $data['users'] = User::leftJoin('users as creator', 'creator.id', 'users.created_by' )
            ->leftJoin('users as updator', 'updator.id', 'users.updated_by')
            ->select(
                'users.name',
                'users.email',
                'users.created_at',
                'users.updated_at',
                'creator.name as creator_name',
                'updator.name as updator_name',
            )
            ->get();
            ;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
