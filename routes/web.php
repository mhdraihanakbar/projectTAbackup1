<?php

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


Auth::routes();


Route::middleware(['auth', 'CekRole:Administrator,'])->group(function () {
});

Route::middleware(['auth', 'CekRole:Petugas Gudang,'])->group(function () {
    Route::get('/user', 'Admin\UserController@read')->name('user');
    Route::get('/admin/user', 'Admin\UserController@read')->name('user');
    Route::get('/admin/user/add', 'Admin\UserController@add')->name('user');
    Route::post('/admin/user/create', 'Admin\UserController@create')->name('user');
});

// Route::group(['middleware' => ['auth', 'cekrole:1']], function () {


Route::get('/home', 'HomeController@index')->name('home');

// ROLE
Route::get('/role', 'Admin\RoleController@read')->name('role');

// USER


// SUPPLIER
Route::get('/supplier', 'Admin\SupplierController@read')->name('supplier');
// Route::get('/admin/supplier', 'Admin\SupplierController@read')->name('supplier');
Route::get('/admin/supplier/add', 'Admin\SupplierController@add')->name('supplier');
Route::post('/admin/supplier/create', 'Admin\SupplierController@create')->name('supplier');
Route::get('/admin/supplier/edit/{id}', 'Admin\SupplierController@edit');
Route::post('/admin/supplier/update/{id}', 'Admin\SupplierController@update');
Route::get('/admin/supplier/delete/{id}', 'Admin\SupplierController@delete');

// SATUAN
Route::get('/satuan', 'Admin\SatuanController@read')->name('satuan');
Route::get('/admin/satuan', 'Admin\SatuanController@read')->name('satuan');
Route::get('/admin/satuan/add', 'Admin\SatuanController@add')->name('satuan');
Route::post('/admin/satuan/create', 'Admin\SatuanController@create')->name('satuan');
Route::get('/admin/satuan/edit/{id}', 'Admin\SatuanController@edit');
Route::post('/admin/satuan/update/{id}', 'Admin\SatuanController@update');
Route::get('/admin/satuan/delete/{id}', 'Admin\SatuanController@delete');

// TIPE
Route::get('/tipe', 'Admin\TipeController@read')->name('tipe');
Route::get('/admin/tipe', 'Admin\TipeController@read')->name('tipe');
Route::get('/admin/tipe/add', 'Admin\TipeController@add')->name('tipe');
Route::post('/admin/tipe/create', 'Admin\TipeController@create')->name('tipe');
Route::get('/admin/tipe/edit/{id}', 'Admin\TipeController@edit');
Route::post('/admin/tipe/update/{id}', 'Admin\TipeController@update');
Route::get('/admin/tipe/delete/{id}', 'Admin\TipeController@delete');

// JURUSAN
Route::get('/jurusan', 'Admin\JurusanController@read')->name('jurusan');
Route::get('/admin/jurusan', 'Admin\JurusanController@read')->name('jurusan');
Route::get('/admin/jurusan/add', 'Admin\JurusanController@add')->name('jurusan');
Route::post('/admin/jurusan/create', 'Admin\JurusanController@create')->name('jurusan');
Route::get('/admin/jurusan/edit/{id}', 'Admin\JurusanController@edit');
Route::post('/admin/jurusan/update/{id}', 'Admin\JurusanController@update');
Route::get('/admin/jurusan/delete/{id}', 'Admin\JurusanController@delete');

// BARANG MASUK
Route::get('/barangmasuk', 'Admin\BarangmasukController@read')->name('barangmasuk');
Route::get('/admin/barangmasuk', 'Admin\BarangmasukController@read')->name('barangmasuk');
Route::get('/admin/barangmasuk/add', 'Admin\BarangmasukController@add')->name('barangmasuk');
Route::post('/admin/barangmasuk/create', 'Admin\BarangmasukController@create')->name('barangmasuk');

// BARANG Keluar
Route::get('/barangkeluar/ti', 'Admin\BarangkeluarController@read')->name('barangkeluar');
Route::get('/admin/barangkeluar/ti', 'Admin\BarangkeluarController@read')->name('barangkeluar');
Route::get('/admin/barangkeluar/ti/add', 'Admin\BarangkeluarController@add')->name('barangkeluar');
Route::post('/admin/barangkeluar/ti/create', 'Admin\BarangkeluarController@create')->name('get.barang');

// BARANG MASUK JURUSAN TI
Route::get('/barangmasukjurusan/ti', 'Admin\BarangMasukJurusanController@read')->name('barangmasukjurusan');
Route::get('/admin/barangmasukjurusan/ti', 'Admin\BarangMasukJurusanController@read')->name('barangmasukjurusan');
Route::get('/admin/barangmasukjurusan/ti/add', 'Admin\BarangMasukJurusanController@add')->name('barangmasukjurusan');
Route::post('/admin/barangmasukjurusan/ti/create', 'Admin\BarangMasukJurusanController@create')->name('barangmasukjurusan');
Route::get('/admin/terimabarangmasuk/{id}', 'Admin\BarangMasukJurusanController@terima')->name('terimabarangmasukjurusan');

// BARANG MASUK JURUSAN
Route::get('/databarang/ti', 'Admin\BarangMasukJurusanController@databarangti')->name('barangbarangti');
Route::get('/admin/databarang/ti', 'Admin\BarangMasukJurusanController@databarangti')->name('barangbarangti');




// BARANG MASUK JURUSAN MESIN
Route::get('/barangmasuk/mesin', 'PetugasGudangMesin\BarangMasukController@read')->name('barangmasukjurusanmesin');

Route::get('/databarang/mesin', 'PetugasGudangMesin\BarangMasukController@databarangmesin')->name('barangmesin');

Route::get('/barangkeluar/mesin', 'PetugasGudangMesin\BarangkeluarController@read')->name('barangkeluar');
Route::get('/admin/barangkeluar/mesin', 'PetugasGudangMesin\BarangkeluarController@read')->name('barangkeluar');
Route::get('/admin/barangkeluar/mesin/add', 'PetugasGudangMesin\BarangkeluarController@add')->name('barangkeluar');
Route::post('/admin/barangkeluar/mesin/create', 'PetugasGudangMesin\BarangkeluarController@create')->name('get.barang.mesin');

Route::get('/admin/terimabarangmasuk/{id}', 'PetugasGudangMesin\BarangMasukController@terima')->name('terimabarangmasukjurusan');

// Route::get('/admin/barangmasuk/mesin', 'PetugasGudangMesin\BarangMasukJurusanController@read')->name('barangmasukjurusanmesin');
// Route::get('/admin/barangmasuk/mesin/add', 'PetugasGudangMesin\BarangMasukJurusanController@add')->name('barangmasukjurusanmesin');
// Route::post('/admin/barangmasuk/mesin/create', 'PetugasGudangMesin\BarangMasukJurusanController@create')->name('barangmasukjurusanmesin');
// Route::get('/admin/terimabarangmasuk/{id}', 'PetugasGudangMesin\BarangMasukJurusanController@terima')->name('terimabarangmasukjurusanmesin');
