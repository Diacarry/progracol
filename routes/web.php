<?php

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

Route::get('/', 'PagesController@home');

Route::get('/index', 'PagesController@home');

Route::get('/tickets', 'PagesController@tickets');

Route::get('/register', 'PagesController@register');

Route::resource('/users', 'UserController');

Route::get('/databaseUser', function () {
    $user = App\TicketUser::first();
    foreach ($user->pivotTicketPriorities as $role) {}
    return $user;
});

Route::get('/databasePriority', function () {
    $user = App\TicketPriority::first();
    foreach ($user->pivotTicketUsers as $role) {}
    return $user;
});
