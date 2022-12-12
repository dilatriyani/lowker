<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\FormController;
use App\Http\Controllers\Akun\LoginController;
use App\Http\Controllers\Home\LokerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Home\KontakController;
use App\Http\Controllers\Admin\LowkerController;
use App\Http\Controllers\Home\TentangController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Home\KebijakanController;
use App\Http\Controllers\Admin\CatekerjaController;
use App\Http\Controllers\Admin\CatelokasiController;
use App\Http\Controllers\admin\SliderHomeController;
use App\Http\Controllers\Admin\CatelulusanController;
use App\Http\Controllers\Admin\DataPekerjaController;
use App\Http\Controllers\admin\PasanglokerController;
use App\Http\Controllers\admin\SliderMitraController;
use App\Http\Controllers\Admin\KebijakanUserController;

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

Route::middleware(['auth'])->group(function()
{
Route::get('/form_iklan',[FormController::class, 'index']);
Route::get('/tentang',[TentangController::class, 'index']);
Route::get('/kebijakan',[KebijakanController::class, 'index']);
Route::get('/kontak',[KontakController::class, 'index']);
Route::get('/loker',[LokerController::class, 'index']);
Route::get('/detail',[LokerController::class, 'detail']);
Route::get('/pasang_lowongan',[LokerController::class, 'lowongan']);
});

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


Route::group(["middleware" => ["guest"]], function() {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
});

Route::group(["middleware" => ["admin"]], function() {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/data_user', [DataPekerjaController::class, 'index']);
    Route::resource("/slider_home", SliderHomeController::class);

    Route::get('/slider_mitra/edit', [SliderMitraController::class, "edit"]);
    Route::put('/slider_mitra/simpan', [SliderMitraController::class, "update"]);
    Route::resource("/slider_mitra", SliderMitraController::class);

    // route kebijakan
    Route::get('/kebijakanuser/edit', [KebijakanUserController::class, "edit"]);
    Route::put('/kebijakanuser/simpan', [KebijakanUserController::class, "update"]);
    Route::resource("/kebijakanuser", KebijakanUserController::class);

    // pasang loker
    Route::get('/pasangloker/edit', [PasanglokerController::class, "edit"]);
    Route::put('/pasangloker/simpan', [PasanglokerController::class, "update"]);
    Route::resource("/pasangloker", PasanglokerController::class);
});

Route::get('/admin/Home/slider_home/edit', [SliderHomeController::class, "edit"]);
Route::put('/slider_home/simpan', [SliderHomeController::class, "update"]);

// slider mitra

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/Layouts/landing', [HomeController::class, 'index']);
Route::get("/logout", [LoginController::class, "logout"]);
Route::post("/register", [LoginController::class, "post_register"]);
