<?php

use App\Http\Controllers\MeuModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World!!!!!!';
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/help', function() {
    return view('help');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/meu-model', [MeuModelController::class]);

// me org em ca amb segu como fun ocu mvc =model poo em ts aliatamsenro cache reload