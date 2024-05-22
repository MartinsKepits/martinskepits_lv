<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use App\Rules\ReCaptchaV3;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MailController extends Controller
{
    public function mailForm(): View
    {
        return view('contact');
    }

    public function mailData(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|max:500',
                'g-recaptcha-response' => ['required', new ReCaptchaV3()]
            ],
            [
                'name.required' => 'Name is required.',
                'name.max' => 'Name should not be longer than 255 characters.',
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'Email should not be longer than 255 characters.',
                'message.required' => 'Message is required.',
                'message.max' => 'Message should not be longer than 500 characters.'
            ]
        );

        $name = $validated['name'];
        $email = $validated['email'];
        $message = $validated['message'];

        $send_mail = config('services.mail.to_address');

        Mail::to($send_mail)
            ->bcc($send_mail)
            ->send(new SendMail($name, $email, $message));

        Mail::to($email)
            ->bcc($email)
            ->send(new SendMessageToEndUser($name));

        return redirect()
            ->back()
            ->with('success-message', 'Thank you. Your message has been sent.');
    }
}
