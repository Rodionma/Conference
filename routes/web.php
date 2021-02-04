<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/updateform/{id}', function () {
    return view('second');
})->name('second');

Route::post('member/add',
    '\App\Http\Controllers\MemberController@create'
)->name('add');


