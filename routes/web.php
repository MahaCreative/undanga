<?php

use App\Http\Livewire\Guntur;
use App\Http\Livewire\Mulka;
use App\Http\Livewire\Srimulka;
use App\Http\Livewire\TemplateTi\Home;
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

Route::get('', Mulka::class);
Route::get('srimulka/{undangan}', Srimulka::class);
Route::get('gunturmulka', Home::class);
Route::get('guntur/{undangan}', Guntur::class);
