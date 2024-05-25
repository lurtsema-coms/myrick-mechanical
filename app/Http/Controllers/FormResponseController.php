<?php

namespace App\Http\Controllers;

use App\Mail\FormResponseEmail;
use App\Models\FormResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FormResponseController extends Controller
{
    public function index()
    {
        $data['forms'] = FormResponse::whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('form_response', $data);
    }

    public function storeFormResponse(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        $details = [
            'name' => $name,
            'email' => $email,
            'form_message' => $message,
        ];

        try {
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new FormResponseEmail($details));
        } catch (\Exception $e) {
            //
            Log::error("Error sending mail: " . $e->getMessage());
        }


        $formResponse = FormResponse::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent
        ]);

        return redirect(url('/'))->with('success', 'form-response-success');
    }

    public function view($id)
    {
        $Response = FormResponse::where('id', $id)
            ->first();

        return $Response;
    }

    public function delete($id)
    {
        $user = FormResponse::withTrashed()->find($id);
        $user->delete();
        return true;
    }
}
