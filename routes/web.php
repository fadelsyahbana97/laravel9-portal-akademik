<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\StudentController;
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
//     return view('welcome');
// });

Route::get('/home', [MakananController::class, 'index'])->middleware('auth');
Route::get('/', [MakananController::class, 'index'])->middleware('auth');

// Route::get('/coba', function () {
//     return view('coba');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// name('login') mengunakan named controller
Route::post('/login', [AuthController::class, 'masuk'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/student', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student-show/{id}', [StudentController::class, 'show'])->middleware(['auth', 'adminOrteacher']);
Route::get('/student-tambah', [StudentController::class, 'create'])->middleware('auth');
Route::post('/student-adds', [StudentController::class, 'simpan'])->middleware('auth');
Route::get('/student-edite/{id}', [StudentController::class, 'edit'])->middleware('auth');
Route::put('/student-editt/{id}', [StudentController::class, 'update'])->middleware('auth');
Route::get('/student-delet/{id}', [StudentController::class, 'delett'])->middleware(['auth', 'admin']);
Route::delete('/student-hapus/{id}', [StudentController::class, 'hapus'])->middleware('auth');
Route::get('/student-deleted', [StudentController::class, 'showDelete'])->middleware('auth');
Route::get('/student-restore/{id}', [StudentController::class, 'restore'])->middleware('auth');

Route::get('/kelas', [KelasController::class, 'index'])->middleware('auth');
Route::get('/kelas-show/{id}', [KelasController::class, 'show'])->middleware('auth');
Route::get('/kelas-create', [KelasController::class, 'create'])->middleware('auth');
Route::post('/kelas-adds', [KelasController::class, 'simpan'])->middleware('auth');
Route::get('/kelas-edit/{id}', [KelasController::class, 'edite'])->middleware('auth');
Route::put('/kelas-updated/{id}', [KelasController::class, 'updated'])->middleware('auth');
Route::get('/kelas-deleted/{id}', [KelasController::class, 'delet'])->middleware('auth');
Route::delete('/kelass-hapus/{id}', [KelasController::class, 'hapus'])->middleware('auth');
Route::get('/kelas-deleted-show', [KelasController::class, 'showDelet'])->middleware('auth');
Route::get('/kelas-restore/{id}', [KelasController::class, 'restore'])->middleware('auth');

Route::get('/olahraga', [OlahragaController::class, 'olahraga'])->middleware('auth');
Route::get('/olahraga-show/{id}', [OlahragaController::class, 'show'])->middleware('auth');

Route::get('/guru', [GuruController::class, 'index'])->middleware('auth');
Route::get('/guru-show/{id}', [GuruController::class, 'show'])->middleware('auth');
