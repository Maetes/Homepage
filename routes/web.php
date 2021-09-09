<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage.home');
})->name('home');

Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');

Route::get('/datenschutzerklärung', function () {
    return view('datenschutzerklärung');
})->name('datenschutzerklärung');

Route::get('/kundencenter', function () {
    return view('kundencenter');
})->name('kundencenter');

Route::post('/email', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255|email:rfc',
        'message' => 'required'
    ]);
    Mail::to('mail@mtw-it.de')->send(new \App\Mail\ContactMail($validated['name'],$validated['email'],$validated['message']));


//    return route('home');
})->name('email');



