<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('user.home');
});
// Route::get('/mahasiswa', function () {
//     return view('admin.mahasiswa.mhs');
// });


Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/getdata', [MahasiswaController::class, 'getdata'])->name("mahasiswa.getdata");
Route::post('mahasiswa/delete', [MahasiswaController::class, 'destroy']);
Route::get('mahasiswa/formadd', function () {
    return view('admin.mahasiswa.add-mhs');
})->name("mahasiswa.formadd");
