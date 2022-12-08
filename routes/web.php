<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Akun\LoginController;
use App\Http\Controllers\Home\FormController;
use App\Http\Controllers\Home\LokerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Home\KontakController;
use App\Http\Controllers\Admin\LowkerController;
use App\Http\Controllers\Home\TentangController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Home\KebijakanController;
use App\Http\Controllers\Admin\CatekerjaController;
use App\Http\Controllers\Admin\CatelokasiController;
use App\Http\Controllers\Admin\CatelulusanController;

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
    return view('Layouts.index');
});


Route::get('/form_iklan',[FormController::class, 'index']);
Route::get('/tentang',[TentangController::class, 'index']);
Route::get('/kebijakan',[KebijakanController::class, 'index']);
Route::get('/kontak',[KontakController::class, 'index']);
Route::get('/loker',[LokerController::class, 'index']);
Route::get('/detail',[LokerController::class, 'detail']);
Route::get('/pasang_lowongan',[LokerController::class, 'lowongan']);

Route::get('/dashboard', [AdminController::class, 'index']);
// Route::get('/redirect',[AdminController::class, 'redirect']);
Route::get('/view_category',[CatelulusanController::class, 'view_category']);
Route::POST('/add_category',[CatelulusanController::class, 'add_category']);
Route::get('/delete_category/{id}',[CatelulusanController::class, 'destroy']);

Route::get('/view_catelulusan',[CatelokasiController::class, 'view_catelulusan']);
Route::POST('/add_catelulusan',[CatelokasiController::class, 'add_catelulusan']);
Route::get('/delete_catelulusan/{id}',[CatelokasiController::class, 'destroy']);

Route::get('/view_catekerja',[CatekerjaController::class, 'view_catekerja']);
Route::POST('/add_catekerja',[CatekerjaController::class, 'add_catekerja']);
Route::get('/delete_catekerja/{id}',[CatekerjaController::class, 'destroy']);

Route::resource('/lowker', LowkerController::class);
Route::get('/lowker/{id}',[LowkerController::class, 'update']);
Route::get('/delete_catelowker/{id}',[CatekerjaController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/logout", [LoginController::class, "logout"]);
