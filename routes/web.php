<?php

use App\Http\Controllers\ProdukController;
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
Route::get('/', [ProdukController::class, 'login'])->name('login');
Route::post('/proseslogin', [ProdukController::class, 'proseslogin'])->name('proseslogin');
Route::get('/register', [ProdukController::class, 'register'])->name('register');
Route::post('/registeruser', [ProdukController::class, 'registeruser'])->name('registeruser');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard', [ProdukController::class, 'dashboard'])->name('dashboard');
    Route::get('/list', [ProdukController::class, 'list'])->name('list');
    Route::get('/logout',[ProdukController::class,'logout'])->name('logout');
    Route::get('/create', [ProdukController::class, 'create'])->name('create');
    Route::post('/creating', [ProdukController::class, 'creating'])->name('creating');
    Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
    Route::post('/editing/{id}', [ProdukController::class, 'editing'])->name('editing');
    Route::get('/delete/{id}', [ProdukController::class, 'delete'])->name('delete');
});