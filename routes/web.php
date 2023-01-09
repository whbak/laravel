<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UpdateController;
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

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::get('/index', [TodoController::class, 'index'])->name('index');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/todo', [App\Http\Controllers\TodoController::class, 'todo']);
Route::get('/getall', [App\Http\Controllers\TodoController::class, 'getall']);
Route::get('/store', [App\Http\Controllers\SaveController::class, 'store'])->name('store')->middleware('auth');
Route::post('/store', [App\Http\Controllers\SaveController::class, 'save'])->name('store')->middleware('auth');
Route::get('/ready', [App\Http\Controllers\SaveController::class, 'ready']);
Route::get('/all', [App\Http\Controllers\UpdateController::class, 'all'])->name('all')->middleware('auth');
Route::get('/edit', [App\Http\Controllers\UpdateController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update', [App\Http\Controllers\UpdateController::class, 'update'])->name('update')->middleware('auth');
Route::get('/query', [App\Http\Controllers\QueryController::class, 'query']);
Route::post('/query', [App\Http\Controllers\QueryController::class, 'makeQuery']);
Route::get('/fetch', [App\Http\Controllers\QueryController::class, 'fetch']);
Route::post('/fetch', [App\Http\Controllers\QueryController::class, 'getFetch']);
Route::get('/like', [App\Http\Controllers\QueryController::class, 'like']);
Route::post('/like', [App\Http\Controllers\QueryController::class, 'getLike']);
Route::get('/assign', [App\Http\Controllers\DeleteController::class, 'assign'])->name('assign')->middleware('auth');
Route::post('/assign', [App\Http\Controllers\DeleteController::class, 'delete'])->name('assign')->middleware('auth');
Route::get('/addtext', [App\Http\Controllers\AddTextController::class, 'addText']);
Route::post('/addtext', [App\Http\Controllers\AddTextController::class, 'saveText']);
Route::get('/text', [App\Http\Controllers\AddTextController::class, 'text']);
Route::get('/alltext', [App\Http\Controllers\EditTextController::class, 'allText']);
Route::get('/edittext', [App\Http\Controllers\EditTextController::class, 'editText']);
Route::post('/writetext', [App\Http\Controllers\EditTextController::class, 'writeText']);
Route::get('/todotext', [App\Http\Controllers\TextController::class, 'todoText']);
Route::get('/picktext', [App\Http\Controllers\TextController::class, 'pickText']);
Route::get('/showtext', [App\Http\Controllers\TextController::class, 'showText']);
Route::get('/wipetext', [App\Http\Controllers\DelTextController::class, 'wipeText']);
Route::get('/checktext', [App\Http\Controllers\DelTextController::class, 'checkText']);
Route::get('/deltext', [App\Http\Controllers\DelTextController::class, 'delText']);
Route::get('/logout', [App\Http\Controllers\TodoController::class, 'logout']);
