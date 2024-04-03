<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', [MailController::class,'mailForm'])->name('contact');
Route::post ('/send-mail',[MailController::class,'mailData'])->name('send_mail');
