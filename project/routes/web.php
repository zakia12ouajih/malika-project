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


// Route::get('/create', [BoockController::class, 'create']);


// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(BoockController::class)->group(
    function () {
        Route::get('/', 'firstFunction');
    });
// Route::get('/se', function () {
//     return view('service');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/urr', [user::class,'index']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::controller(BoockController::class)->group(function () {
        Route::get('/homeAdmin', 'index');
        Route::get('/aff','create');
        Route::post('/ajouter', 'store');
        Route::get('/afficherUsers','afficher')->name('users');
        Route::get('/edit{id}', 'edit');
        Route::put('/modiUser/{id}', 'modifier');
        Route::get('/search','search');
        Route::get('/se','service')->name("ser");
    });
    
    // Route::get('/se',[BoockController::class,'service'])->name("ser");
    
    
    // Route::get('/t',[BoockController::class,'afficher'])->name("aff");
    // Route::get('d/{id}',[BoockController::class,'edit']);
    // Route::put('m/{id}',[BoockController::class,'modifier'])->name("mod");
    // Route::delete('s/{id}',[BoockController::class,'supprimer'])->name("test.supprimer");

});

// Route::get('/indexx', [BoockController::class, 'indexx']);
// Route::get('/search',[BoockController::class,'search'])->name("search");
// Route::get('/din', [BoockController::class, 'din']);
// Route::get('/fronci', [BoockController::class, 'fronci']);
// Route::get('/roman', [BoockController::class, 'roman']);
// Route::get('/show', [BoockController::class, 'show']);
// Route::get('/nafs', [BoockController::class, 'nafs']);
// // Route::get('/', [BoockController::class, 'welcome']);
// Route::get('/save',[BoockController::class,'save'])->name("save");
// Route::get('/jj', [BoockController::class,'welcome']);

// Route::resource('url1',BoockController::class);
