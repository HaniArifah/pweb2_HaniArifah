<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ObservasiController;
use App\Http\Controllers\PengajuanController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () { //pertama muncul setelah welkom
    return view('dashboard',[SuratController::class, 'index']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/forms', function () {
    return view('forms');
})->middleware(['auth', 'verified'])->name('forms');

Route::get('/data', [SuratController::class, 'show'])->middleware(['auth', 'verified'])->name('data');
Route::get('/data-edit/{id}', [SuratController::class, 'edit'])->middleware(['auth', 'verified'])->name('data-edit');
Route::put('/data/{id}', [SuratController::class, 'update'])->middleware(['auth', 'verified'])->name('data/id');
Route::post('/data', [SuratController::class, 'store'])->middleware(['auth', 'verified'])->name('data-tambah');
Route::delete('/data/{id}', [SuratController::class, 'destroy'])->middleware(['auth', 'verified'])->name('data-hapus');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Route::resource('/das', ObservasiController::class);

// Route::get('/a', 'App\Http\Controllers\ObservasiController@index');


//Route::get('/lan', 'ObservasiController@index')->name('index');

// Route::get('/dashboard', 'ObservasiController@updateProfile')->name('index');

// Route::get('/d', function () {
//     return 'Hello World';
// });

// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::post('dashboard', [DashboardController::class, 'store'])->name('dashboard.store');







