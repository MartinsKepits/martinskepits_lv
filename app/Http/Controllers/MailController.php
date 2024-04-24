<?php

namespace App\Http\Controllers;

use App\Rules\ReCaptchaV3;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Mail\SendMessageToEndUser;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function mailForm()
    {
        return view('contact');
    }

    public function mailData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => ['required', new ReCaptchaV3()]
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $message = $validated['message'];

        $send_mail = "martinskepitslv@gmail.com";

        Mail::to($send_mail)
            ->bcc($send_mail)
            ->send(new SendMail($name, $email, $message));

        Mail::to($email)
            ->bcc($email)
            ->send(new SendMessageToEndUser($name));

        return redirect()->back()->with('success-message', 'Thank you. Your message has been sent.');
    }
}
