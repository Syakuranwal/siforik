<?php


use App\Http\Controllers\BarangController;
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
Route::get('/login', function () {
    return view('login');
});

Route::get('kategori_barang',[BarangController::class, 'kategori_barang'] );

Route::get('v_barang', [BarangController::class,'v_barang']);
Route::get('v_suplier', [BarangController::class,'v_suplier']);
Route::get('v_pengadaan', [BarangController::class,'v_pengadaan']);
Route::get('v_ruanglab', [BarangController::class,'v_ruanglab']);
