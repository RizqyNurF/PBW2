<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route User
    Route::name('user.')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('daftarPengguna');
        Route::get('/userRegistration', [UserController::class, 'create'])->name('registrasi');
        Route::post('/userStore', [UserController::class, 'store'])->name('storePengguna');
        Route::get('/userView/{user} ', [UserController::class, 'show'])->name('infoPengguna');
        Route::get('/userEdit/{user} ', [UserController::class, 'edit'])->name('editPengguna');
        Route::post('/userUpdate', [UserController::class, 'update'])->name('updatePengguna');
    });

    // Route Koleksi
    Route::name('koleksi.')->group(function () {
        Route::get('/koleksi', [CollectionController::class, 'index'])->name('daftarKoleksi');
        Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('registrasi');
        Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('storeKoleksi');
        Route::get('/koleksiView/{collection} ', [CollectionController::class, 'show'])->name('infoKoleksi');
        Route::get('/koleksiEdit/{collection}', [CollectionController::class, 'edit'])->name('editKoleksi');
        Route::post('/koleksiUpdate', [CollectionController::class, 'update'])->name('updateKoleksi');
    });
});


require __DIR__ . '/auth.php';


// Rizqy Nurfauzella 6706223074 D3 IF 46-04
