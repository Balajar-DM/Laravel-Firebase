<?php

use App\Http\Controllers\NotifController;
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

Route::get('/form', [SendMessages::class, 'index'])->name('data');

Route::post('/save-token', [SendMessages::class, 'saveToken'])->name('save.token');

Route::post('/send-notification', [SendMessages::class, 'sendNotification'])->name('send.notification');

Route::post('/notifsending', [NotifController::class, 'index'])->name('notif.send');
