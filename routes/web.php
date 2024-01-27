<?php

use App\Http\Controllers\SendMessages;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/setToken', [SendMessages::class, 'setToken'])->name('firebase.token');

Route::get('/messages', [SendMessages::class, 'index'])->name('form.pesan');

Route::post('/store', [SendMessages::class, 'sending'])->name('send.pesan');
