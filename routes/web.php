<?php


Route::resource('/members', 'MembersController');
Route::resource('members.accounts', 'MemberAccountsController');
Route::get('/logout', "Auth\LoginController@logout");
Route::get('/', function () {
    $login = auth()->loginUsingId(1);

    return view('welcome');
})->middleware('guest')->name('login');

Route::post('/login', "Auth\LoginController@login");
Route::redirect('/dashboard', '/');

Route::get('/home', 'HomeController@index')->name('home');
