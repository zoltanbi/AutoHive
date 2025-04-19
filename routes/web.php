<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name" => "John",
        "email" => "example@test.com"
    ];
    dump($person);

    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
