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

Route::get('/', function () {
    return view('home');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
route::get('tchat', function () {
    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        echo "lol";
    } else {
        return view('sign-up');
    }
});
route::get('sign-in', function () {
    return view('sign-in');
});
route::get('sign-up', function () {
    return view('sign-up');
});