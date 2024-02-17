<?php

use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Doctrine\DBAL\Logging\Middleware;
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

Route::get('/', [MainController::class, 'home'])->name('main.home');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/contact', [MainController::class,'Contact'])->name('main.contact');

Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');

Route::post('/reservation', [MainController::class, 'reservationStore'])->name('main.reservation.store');
               //url//                                    //fonction//
        //post c'est pour traiter les données et get les afficher//

Route::get('/admin/reservation', [AdminReservationController::class,'Index'])->middleware('auth')->name('admin.reservation.index');

Route::get('/admin/reservation/create', [AdminReservationController::class,'create'])->middleware('auth')->name('admin.reservation.create');

Route::post('/admin/reservation', [AdminReservationController::class,'store'])->middleware('auth')->name('admin.reservation.store');

Route::get('/admin/reservation/{id}', [AdminReservationController::class,'Show'])->middleware('auth')->name('admin.reservation.show');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class,'edit'])->middleware('auth')->name('admin.reservation.edit');

Route::put('/admin/reservation/{id}', [AdminReservationController::class,'update'])->middleware('auth')->name('admin.reservation.update');

Route::delete('/admin/reservation/{id}', [AdminReservationController::class,'delete'])->middleware('auth')->name('admin.reservation.delete');



// Middleware('auth') protéger par mot de passe

Route::get('/dashboard', function () {
              return view('dashboard');
          })->middleware(['auth', 'verified'])->name('dashboard');
          
Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
          });
          
          require __DIR__.'/auth.php';