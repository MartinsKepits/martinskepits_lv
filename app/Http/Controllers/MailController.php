<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Mail\SendMessageToEndUser;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function mailform()
    {
        return view('contact');
    }

    public function maildata(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $message = $validated['message'];

        $send_mail = env('MAIL_USERNAME');

        Mail::to($send_mail)->send(new SendMail($name, $email, $message));
        Mail::to($email)->send(new SendMessageToEndUser($name));

        return redirect()->to('/');
    }
}
