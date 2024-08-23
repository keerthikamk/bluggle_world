<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'home');
Route::view('about-us', 'about-us');
Route::view('services', 'services');
Route::view('services/consulting-services', 'consulting-services');
Route::view('services/digital-marketing', 'bluggle-digital-marketing');
Route::view('education', 'bluggle-education');
Route::view('services/conferences/bluggle-conference', 'bluggle-conference');
Route::view('webinar', 'bluggle-webinar');
Route::view('services/software-solution', 'bluggle-software-solution');
Route::view('blogs', 'blogs');
Route::view('contact-us', 'contact-us');
Route::view('blogs/medical-conferences', 'medical-conferences');
Route::view('blogs/ai-in-digital-marketing', 'ai-in-digital-marketing');
Route::view('blogs/investment-webinars', 'investment-webinars');
Route::view('blogs/cyber', 'cyber');
Route::view('register', 'register');
Route::view('services/conferences/network-security', 'bluggle-network');
Route::view('services/conferences/finvest-webinars', 'finvest-webinars');
Route::view('pricing', 'pricing');
// Route::view('service/courses&internship', 'bluggle-internship');


Route::post('register', [AdminController::class, 'store']) ;
Route::post('contactform', [AdminController::class, 'contactform']) ;




Route::middleware(['guest'])->group(function(){
Route::post('login', [AdminController::class, 'login']) ;
Route::get('login', [AdminController::class, 'index2'])->name('login') ;   

});

Route::middleware(['admin'])->group(function(){
    Route::get('admin', [AdminController::class, 'index']) ;
});

Route::middleware(['auth'])->group(function(){
    Route::get('logout', [AdminController::class, 'logout']) ;
});




// Route::view('pannel', 'admin-pannel');



