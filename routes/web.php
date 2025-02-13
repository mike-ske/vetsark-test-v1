<?php

use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/register', [IndexController::class, 'register']);

Route::post('/register', [IndexController::class, 'create']);

// Route::get('/register', [IndexController::class, 'register']);
Route::get('/dashboard/{blog}', [TasksController::class, 'show']);

// return Inertia::render('Welcome', [
//     'canLogin' => Route::has('login'),
//     'canRegister' => Route::has('register'),
// ]);
//  Route::middleware(['auth:sanctum', 'verified'])->get({
//     return Inertia::render('Dashboard');
// })->name('dashboard');




// })
    
    
 
