<?php

namespace App\Http\Controllers;

use App\Models\FormResponse;
use Illuminate\Http\Request;

class FormResponseController extends Controller
{
    public function index()
    {
        $data['forms'] = FormResponse::whereNull('deleted_at')
            ->get();

        return view('form_response', $data);
    }

    public function storeFormResponse(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        $formResponse = FormResponse::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent
        ]);

        return redirect()->back()->with('success', 'form-response-success');
    }
}
