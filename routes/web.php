<?php

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
    $data = [
        "randomLinks" => [
            "google" => [
                "name" => "Google",
                "url" => "https://www.google.com"
            ],
            "youtube" => [
                "name" => "YouTube",
                "url" => "https://www.youtube.com"
            ],
            "boolean" => [
                "name" => "Boolean",
                "url" => "https://www.boolean.careers"
            ]
        ]
    ];

    return view('home', $data);
});
