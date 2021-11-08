<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view("home",['title'=>"Home", 'pageTitle'=>"Welcome"]);
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return view("contact",['title'=>"Contact", 'pageTitle'=>"Contact Me"]);
});

Route::resource('projects', ProjectController::class);

Route::resource('developers', DeveloperController::class);

// Route::get('/', [HomeProjectController::class, 'show']);

// Route::get('/', [HomeDeveloperController::class, 'show']);

// Route::get('/projects/{code}',[HomeDeveloperController::class, 'show']);

// Route::get('/projects/{code}',[HomeDeveloperController::class, 'show']);
