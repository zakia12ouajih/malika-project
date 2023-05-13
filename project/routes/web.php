<?php

use App\Http\Controllers\BoockController;
use App\Http\Controllers\user;
use App\Models\boock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/create', [BoockController::class, 'create'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('url',BoockController::class);
//Route::resource('url',user::class);
Route::get('/urr', [user::class,'index']);

Route::prefix('admin')->middleware(['auth','isAdmins'])->group(function(){
    Route::resource('url',BoockController::class);

    Route::get('/t',[BoockController::class,'afficher'])->name("aff");
    Route::get('d/{id}',[BoockController::class,'edit']);
Route::put('m/{id}',[BoockController::class,'modifier'])->name("mod");
Route::delete('s/{id}',[BoockController::class,'supprimer'])->name("test.supprimer");

       
});

// Route::resource('url1',BoockController::class);
