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
        'name' => 'Olga',
        'lastname' => 'Demina',
        'isLoggedIn' => false,
        'students' => [
            [
                'name' => 'Luca',
                'lastname' => 'Bodasca'
            ],
            [
                'name' => 'Fabrizio',
                'lastname' => 'Bocca'
            ],
            [
                'name' => 'Christian',
                'lastname' => 'Capodanno'
            ]
        ],
        'anotherArray' => [

        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');
