<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\tailwindcssController;
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

Route::get('/responsive_design', [tailwindcssController::class, 'display']);

Route::get('/resptwo', [tailwindcssController::class, 'resptwo']);

Route::get('/respone', [tailwindcssController::class, 'respone']);

Route::get('/challenge_5', [tailwindcssController::class, 'challengeFive']);

Route::get('/employee_card', [tailwindcssController::class, 'employeeCard']);

Route::get('/landing_page', [tailwindcssController::class, 'landingPage']);

Route::resource('/blog', PostsController::class);
