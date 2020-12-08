<?php

use App\Http\Controllers\MoodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('index');
});

/* Probably would get used later...
index

Route::get("/users/signup", [UsersController::class, 'create'])->name("users.create");

Route::post("/users", [UsersController::class, 'store'])->name("users.store");

Route::get("/users/{user}", [UsersController::class, 'show'])->name("users.show");

Route::get("/users/{user}/edit", [UsersController::class, 'edit'])->name("users.edit");

Route::post("/users/{user}", [UsersController::class, 'update'])->name("users.update");

Route::post("/users/{user}", [UsersController::class, 'destroy'])->name("users.destroy");
*/

// Route::resource('users', UsersController::class); // Only index needed (below)
Route::get("/users", [UsersController::class, 'index'])->name("users.index");

Route::resource('moods', MoodController::class)->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
