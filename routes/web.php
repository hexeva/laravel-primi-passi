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

    $list = [
        'list_of_teachers'=>['Mario Rossi','Enrico Verdi','Marta Bianchi']
    ];
   

    return view('home',$list);
})->name('homepage');


Route::get('/about-courses', function () {


    return view('about');
})->name('about');

Route::get('/about-teachers', function () {

    $teachers = [
        'name' => 'Mario',
        'surname' => 'Rossi',
        'courses' => [
            'analisi',
            'statistica',
            'matematica'
        ]
    ];


    return view('teachers',$teachers);
})->name('teacher');

