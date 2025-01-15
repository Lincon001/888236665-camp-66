<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/mycontroller',
[MyConTroller::class, 'myfunction']);

Route::post('/mycontroller',
[MyConTroller::class, 'MYFUNCTION']);

Route::get('/', function () {
    return view('home');
});

Route::get('/hello/{id?}',
    function ($val=""){
    return "<h1>Hello World! $val</h1>";
});
