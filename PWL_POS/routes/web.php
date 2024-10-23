<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+'); //artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function() {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::group(['prefix' => 'user'], function(){
        Route::get('/', [UserController::class, 'index']);                          //menampilkan laman awal user
        Route::post('/list', [UserController::class, 'list']);                      //menampilkan data user dalam bentuk json untuk datatables
        Route::get('/create', [UserController::class, 'create']);                   //menampilkan laman form tambah user
        Route::post('/', [UserController::class, 'store']);                         //menyimpan data user baru
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);         //menampilkan laman form tambah user AJAX
        Route::post('/ajax', [UserController::class, 'store_ajax']);                //menyimpan data user baru AJAX
        Route::get('/{id}', [UserController::class, 'show']);                       //menampilkan detail user
        Route::get('/{id}/edit', [UserController::class, 'edit']);                  //menampilkan laman form edit user
        Route::put('/{id}', [UserController::class, 'update']);                     //menyimpan perubahan data user
        Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);        //menampilkan form detil data user AJAX
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        //menampilkan laman form edit user AJAX
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    //menyimpan perubahan data user AJAX
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   //menampilkan form confirm hapus data user AJAX
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); //menghapus data user AJAX
        Route::delete('/{id}', [UserController::class, 'destroy']);                 //menghapus data user
        Route::get('/import', [UserController::class, 'import']);                   //menampilkan form impor data user
        Route::post('/import_ajax', [UserController::class, 'import_ajax']);        //mengimpor file excel ke daftar data user
        Route::get('/export_excel', [UserController::class, 'export_excel']);       //mengekspor data user dalam bentuk file excel
        Route::get('/export_pdf', [UserController::class, 'export_pdf']);           //mengekspor data user dalam bentuk file pdf
    });
});


Route::group(['prefix' => 'level'], function(){
    Route::get('/', [LevelController::class, 'index']);                             //menampilkan laman awal level
    Route::post('/list', [LevelController::class, 'list']);                         //menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);            //menampilkan laman form tambah level AJAX
    Route::post('/ajax', [LevelController::class, 'store_ajax']);                   //menyimpan data level baru AJAX
    Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);           //menampilkan form detil data level AJAX
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);           //menampilkan laman form edit level AJAX
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);       //menyimpan perubahan data level AJAX
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);      //menampilkan form confirm hapus data level AJAX
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);    //menghapus data level AJAX
    Route::get('/import', [LevelController::class, 'import']);                      //menampilkan form impor data level
    Route::post('/import_ajax', [LevelController::class, 'import_ajax']);           //mengimpor file excel ke daftar data level
    Route::get('/export_excel', [LevelController::class, 'export_excel']);          //mengekspor data level dalam bentuk file excel
    Route::get('/export_pdf', [LevelController::class, 'export_pdf']);              //mengekspor data level dalam bentuk file pdf
});

Route::group(['prefix' => 'kategori'], function() {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
    Route::post('/ajax', [KategoriController::class, 'store_ajax']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function() {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class, 'store']);
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
    Route::post('/ajax', [BarangController::class, 'store_ajax']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

Route::group(['prefix' => 'supplier'], function() {
    Route::get('/', [supplierController::class, 'index']);
    Route::post('/list', [supplierController::class, 'list']);
    Route::get('/create', [supplierController::class, 'create']);
    Route::post('/', [supplierController::class, 'store']);
    Route::get('/create_ajax', [supplierController::class, 'create_ajax']);
    Route::post('/ajax', [supplierController::class, 'store_ajax']);
    Route::get('/{id}', [supplierController::class, 'show']);
    Route::get('/{id}/edit', [supplierController::class, 'edit']);
    Route::put('/{id}', [supplierController::class, 'update']);
    Route::get('/{id}/edit_ajax', [supplierController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [supplierController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [supplierController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [supplierController::class, 'delete_ajax']);
    Route::delete('/{id}', [supplierController::class, 'destroy']);
});

Route::group(['prefix' => 'stok'], function(){
    Route::get('/', [StokController::class, 'index']);                                //menampilkan laman awal stok
    Route::post('/list', [StokController::class, 'list']);                            //menampilkan data stok dalam bentuk json untuk datatables
    Route::get('/create_ajax', [StokController::class, 'create_ajax']);               //menampilkan laman form tambah stok AJAX
    Route::post('/ajax', [StokController::class, 'store_ajax']);                      //menyimpan data stok baru AJAX
    Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);              //menampilkan form detil data stok AJAX
    Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);              //menampilkan laman form edit stok AJAX
    Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);          //menyimpan perubahan data stok AJAX
    Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);         //menampilkan form confirm hapus data stok AJAX
    Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);       //menghapus data stok AJAX
    Route::get('/import', [StokController::class, 'import']);                         //menampilkan form impor data stok
    Route::post('/import_ajax', [StokController::class, 'import_ajax']);              //mengimpor file excel ke daftar data stok
    Route::get('/export_excel', [StokController::class, 'export_excel']);             //mengekspor data stok dalam bentuk file excel
    Route::get('/export_pdf', [StokController::class, 'export_pdf']);                 //mengekspor data stok dalam bentuk file pdf
});

Route::group(['prefix' => 'penjualan'], function(){
    Route::get('/', [PenjualanController::class, 'index']);                                //menampilkan laman awal penjualan
    Route::post('/list', [PenjualanController::class, 'list']);                            //menampilkan data penjualan dalam bentuk json untuk datatables
    Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);               //menampilkan laman form tambah penjualan AJAX
    Route::post('/ajax', [PenjualanController::class, 'store_ajax']);                      //menyimpan data penjualan baru AJAX
    Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);              //menampilkan form detil data penjualan AJAX
    Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);              //menampilkan laman form edit penjualan AJAX
    Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);          //menyimpan perubahan data penjualan AJAX
    Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);         //menampilkan form confirm hapus data penjualan AJAX
    Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);       //menghapus data penjualan AJAX
    Route::get('/import', [PenjualanController::class, 'import']);                         //menampilkan form impor data penjualan
    Route::post('/import_ajax', [PenjualanController::class, 'import_ajax']);              //mengimpor file excel ke daftar data penjualan
    Route::get('/export_excel', [PenjualanController::class, 'export_excel']);             //mengekspor data penjualan dalam bentuk file excel
    Route::get('/export_pdf', [PenjualanController::class, 'export_pdf']);                 //mengekspor data penjualan dalam bentuk file pdf
});

Route::group(['prefix' => 'profile'], function(){
    Route::get('/{id}', [ProfileController::class, 'index']);
});