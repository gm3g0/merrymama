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
use \App\Http\Controllers\backbuy;
use \App\Http\Controllers\backdata;
use \App\Http\Controllers\contact_edit;
use \App\Http\Controllers\edit_homepage;
use \App\Http\Controllers\edit_QA;
use Illuminate\Http\Request;
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

Route::get('/' , [be_homepage::class , 'index'])->name('homepage.index'); //設定首頁，並給它名字(只要用到root這個路徑，就會來這個頁面)
// Route::resource('homepage', be_homepage::class)->only('index');
Route::resource('edit_homepage',edit_homepage::class)->only('index','edit_homepage');
Route::post('/edit_homepage', [edit_homepage::class,'edit_homepage'])->name('edit_homepage');

Route::resource('login', login::class)->only('index','login','logout');
Route::post('/login', [login::class,'login'])->name('login');
Route::get('/logout', [login::class,'logout'])->name('logout');

Route::resource('singup', singup::class)->only('index','singup');
Route::post('/singup', [singup::class,'singup'])->name('singup');

Route::resource('QA', be_QA::class)->only('index');

Route::resource('buy',be_buy::class)->only('index','create','store')->middleware('afuserAuth');
Route::post('/buycheck',[be_buy::class,'create'])->name('be_buy.index2')->middleware('afuserAuth');
Route::post('/finish',[be_buy::class,'store'])->name('be_buy.finish')->middleware('afuserAuth');


Route::resource('story', be_story::class)->only('index','create');
Route::get('/teamstory',[be_story::class,'create'])->name('story.index2');


Route::resource('product', be_product::class)->only('index','create','product','show');
Route::get('/products',[be_product::class,'create'])->name('product');
Route::post('/mesproduct', [be_product::class,'product'])->name('mesproduct');
Route::get('/show/{product_PName}',[be_product::class,'show'])->name('be_product.show');

Route::resource('contact', be_contact::class)->only('index');

Route::resource('member', be_member::class)->only('index','create','member')->middleware('afuserAuth');
Route::get('/edit',[be_member::class,'create'])->name('be_member.edit')->middleware('afuserAuth');
Route::post('/member', [be_member::class,'member'])->name('member')->middleware('afuserAuth');


Route::resource('ordermanage', ordermanage::class)->only('index','create')->middleware('afuserAuth');
Route::get('/or_history',[ordermanage::class,'create'])->name('ordermanage.history')->middleware('afuserAuth');

Route::resource('membermanage', membermanage::class)->only('index','create','membermanage')->middleware('afuserAuth');
Route::get('/me_order/{member_name}',[membermanage::class,'create'])->name('memberrmanage.order')->middleware('afuserAuth');
Route::post('/membermanage', [membermanage::class,'membermanage'])->name('membermanage')->middleware('afuserAuth');

Route::resource('productmanage', productmanage::class)->only('index','productmanage','new_product','edit_product','productedit','edit')->middleware('afuserAuth');
Route::post('/productmanage', [productmanage::class,'productmanage'])->name('productmanage')->middleware('afuserAuth');
Route::post('/new_product', [productmanage::class,'new_product'])->name('new_product')->middleware('afuserAuth');
Route::post('/edit_product', [productmanage::class,'edit_product'])->name('edit_product')->middleware('afuserAuth');
Route::get('/productedit/{product_PName?}', [productmanage::class,'productedit'])->name('productedit')->middleware('afuserAuth');
Route::post('/edit', [productmanage::class,'edit'])->name('edit')->middleware('afuserAuth');

Route::resource('backbuy',backbuy::class)->only('index','backbuy')->middleware('afuserAuth');
Route::post('/backbuy', [backbuy::class,'backbuy'])->name('backbuy.backbuy')->middleware('afuserAuth');

Route::resource('data',backdata::class)->only('index','dataset','excel')->middleware('afuserAuth');
Route::post('/backdata', [backdata::class,'dataset'])->name('data.backdata')->middleware('afuserAuth');
Route::get('/excel/{type}', [backdata::class,'excel'])->name('excel')->middleware('afuserAuth');

Route::resource('contact_edit', contact_edit::class)->only('index','contact_edit')->middleware('afuserAuth');
Route::post('/contact_edit', [contact_edit::class,'contact_edit'])->name('contact_edit.contact_edit')->middleware('afuserAuth');

Route::resource('edit_QA',edit_QA::class)->only('index','edit_QA','new_QA')->middleware('afuserAuth');
Route::post('/edit_QA', [edit_QA::class,'edit_QA'])->name('edit_QA.edit_QA')->middleware('afuserAuth');
Route::post('/new_QA', [edit_QA::class,'new_QA'])->name('new_QA.new_QA')->middleware('afuserAuth');

Route::get('/PageController', [PageController::class,'PageController'])->middleware('userAuth');
Route::post('login.php', 'UserController@login');
Route::get('login.php', 'UserController@showLoginPage');
Route::get('logout.php', 'UserController@logout');
