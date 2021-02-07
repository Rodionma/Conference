<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/updateform/', function () {
    return view('second');
})->name('second');

Route::post('member/add',
    '\App\Http\Controllers\MemberController@create'
)->name('add');

Route::post('member/update',
    '\App\Http\Controllers\MemberController@update'
)->name('update');

Route::get('/social', function () {
    return view('social')->with(['amount'=>\App\Models\Member::all()->count(),'tw_text'=>Config::get('app.tw_text')]);
})->name('social');

Route::get('/all', '\App\Http\Controllers\MemberController@getall')->name('all');


