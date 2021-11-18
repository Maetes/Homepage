<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServicesController;

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
    return view('landingpage.home',['info_company'=>config('data.info_company')]);
})->name('home');

Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');

Route::get('/datenschutzerklärung', function () {
    return view('datenschutzerklärung');
})->name('datenschutzerklärung');

// Route::get('/kundencenter', function () {
//     return view('kundencenter');
// })->name('kundencenter');

Route::post('/email', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255|email:rfc',
        'message' => 'required'
    ]);
    Mail::to('mail@mtw-it.de')->send(new \App\Mail\ContactMail($validated['name'],$validated['email'],$validated['message']));


//    return route('home');
})->name('email');

Route::prefix('services')->group(function(){
    // Route::get('/',[TeamController::class,'index']);
    Route::get('softwareentwicklung/{ort?}',[ServicesController::class,'softwareentwicklung'])->where('ort','[A-Za-z-_äöüÄÖÜß]+')->name('services.softwareentwicklung');
    Route::get('it-beratung/{ort?}',[ServicesController::class,'itBeratung'])->where('ort','[A-Za-zäöüÄÖÜß]+')->name('services.it-beratung');
    Route::get('informations-und-telekommunikationstechnik/{ort?}',[ServicesController::class,'itkServices'])->where('ort','[A-Za-z-_äöüÄÖÜß]+')->name('services.itk-services');
    Route::get('{service}/{ort?}',[ServicesController::class,'genericService'])->where('ort','[A-Za-z0-9-_äöüÄÖÜß%]+')->where('service','[A-Za-z0-9-_äöüÄÖÜß%]+')->name('services.genericService');
});

// \Spatie\Sitemap\SitemapGenerator::create('http://localhost:8000')->writeToFile(public_path('sitemap.xml'));


Route::prefix('team')->group(function(){
    // Route::get('/',[TeamController::class,'index']);
    Route::get('martinmueller',function(){
        return redirect('/#team');
    })->name('team.martin');
    Route::get('martinmüller',function(){
        return redirect('/#team');
    })->name('team.martin');
    Route::get('timtomczak',function(){
        return redirect('/#team');
    })->name('team.tim');
    Route::get('svenwalbroel',function(){
        return redirect('/#team');
    })->name('team.sven');
    Route::get('svenwalbröl',function(){
        return redirect('/#team');
    })->name('team.sven');

    // TODO Routen auskommentieren, wenn Inhalt fertig
    // Route::get('martinmueller',[TeamController::class,'martinmueller'])->name('team.martin');
    // Route::get('martinmüller',[TeamController::class,'martinmueller'])->name('team.martin');
    // Route::get('timtomczak',[TeamController::class,'timtomczak'])->name('team.tim');
    // Route::get('svenwalbroel',[TeamController::class,'svenwalbroel'])->name('team.sven');
    // Route::get('svenwalbröl',[TeamController::class,'svenwalbroel'])->name('team.sven');
});
