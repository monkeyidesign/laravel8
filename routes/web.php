<?php

use App\Http\Controllers\Test\file;
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

// Route::get('/', function () {
//     //$data = ['name' => 'Finn'];
//     // $data = [ 'name' => [
//     //     'key1' => 'Angry River',
//     //     'key2' => 'Harry Potter',
//     //     'key3' => 'Deep Work'
//     //     ]
//     // ] ;

//     return view('welcome', [File::class, 'index']);
// });

Route::get('/', [File::class, 'index']);