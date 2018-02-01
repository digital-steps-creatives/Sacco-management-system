<?php


Route::resource('/members', 'MembersController');
Route::get('/', function () {
    return view('welcome');
});
