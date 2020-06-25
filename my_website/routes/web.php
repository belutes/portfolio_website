<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [
    'uses' => 'PortfolioController@getPortfolioHome',
    'as' => 'index',
]);

// Route::get('/sign-up', [
//     'uses' => "PortfolioController@getSignUp",
//     'as' => 'sign_up',
// ]);

// Route::post('/sign-up', [
//     'uses' => 'PortfolioController@postSignUp',
//     'as' => 'post_sign_up',
// ]);

// Route::get('/login', [
//     'uses' => 'PortfolioController@getLogin',
//     'as' => 'log-in'
// ]);

// Route::post('/login', [
//     'uses' => 'PortfolioController@postLogin',
//     'as' => 'post_login'
// ]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
