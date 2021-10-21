<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\MyController;
use App\http\controllers\UserController;






Route::get('/about',[MyController::class,'AboutPage'])-> name('about');

Route::get('/teams',[MyController::class,'TeamsPage'])-> name('teams');

Route::get('/contact',[MyController::class,'ContactPage'])-> name('contact');
Route::POST('/contact',[MyController::class,'contactSubmit'])-> name('contact');

Route::get('/service',[MyController::class,'ServicePage'])-> name('service');
Route::get('/', function () {
    return view('pages.login');
})->name('home');
Route::get('/Dashboard', function () {
    return view('pages.userview');
})->middleware('validation');
Route::get('/user/home/{id}', [UserController::class, 'Home'])->middleware('validation');
Route::get('/signup', [UserController::class, 'create'])->name('registration');
Route::post('/Registertion', [UserController::class, 'createSubmit'])->name('/Registertion');
Route::post('/Dashboard', [UserController::class, 'loginform'])->name('login');
Route::get('/user/profile/{id}',[UserController::class,'profile'])->middleware('validation');
Route::post('/Edit', [UserController::class, 'editSubmit'])->name('/Edit');
Route::get('/logout', [UserController::class, 'logout'])->name('/logout');