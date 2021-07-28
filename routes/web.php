<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\be_homepage;
use \App\Http\Controllers\login;
use \App\Http\Controllers\singup;
use \App\Http\Controllers\be_QA;
use \App\Http\Controllers\be_buy;
use \App\Http\Controllers\be_story;
use \App\Http\Controllers\be_product;
use \App\Http\Controllers\be_contact;
use \App\Http\Controllers\be_member;
use \App\Http\Controllers\ordermanage;
use \App\Http\Controllers\productmanage;
use \App\Http\Controllers\membermanage;

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

// Route::get('/', function () {
//     return view('be_homepage.index');
// });
Route::resource('homepage', be_homepage::class)->only('index');
Route::resource('login', login::class)->only('index');
Route::resource('singup', singup::class)->only('index');
Route::resource('QA', be_QA::class)->only('index');
Route::resource('buy',be_buy::class)->only('index');
Route::resource('story', be_story::class)->only('index');
Route::resource('product', be_product::class)->only('index');
Route::resource('contact', be_contact::class)->only('index');

Route::resource('member', be_member::class)->only('index','create');
Route::get('/edit',[ordermanage::class,'create']);

Route::resource('order', ordermanage::class)->only('index','create');
Route::get('/history',[ordermanage::class,'create']);



//Route::resource('store', store::class)->only('index');
