<?php

use App\Http\Controllers\FormPemesanController;
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

Route::get('index', function () {
    return view('landing_page/index')->name('index');
});

Route::post('/proses_form_pemesanan', [FormPemesanController::class, 'proses_form_pemesanan'])->name('page_proses_form_pemesanan');
