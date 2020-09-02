<?php

use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return view('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/');
});

Route::post('/login', 'LoginController@login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/barang', 'BarangController@index');
    Route::get('/barang/add', 'BarangController@add');
    Route::get('/barang/edit/{id}', 'BarangController@edit');
    Route::get('/barang/delete/{id}', 'BarangController@delete');
    Route::post('/barang/add', 'BarangController@save')->name('barang');
    Route::post('/barang/edit/{id}', 'BarangController@update')->name('editbarang');

    Route::get('/satuan', 'SatuanController@index');
    Route::get('/satuan/add', 'SatuanController@add');
    Route::get('/satuan/edit/{id}', 'SatuanController@edit');
    Route::get('/satuan/delete/{id}', 'SatuanController@delete');
    Route::post('/satuan/add', 'SatuanController@save')->name('satuan');
    Route::post('/satuan/edit/{id}', 'SatuanController@update')->name('editsatuan');

    Route::get('/supplier', 'SupplierController@index');
    Route::get('/supplier/add', 'SupplierController@add');
    Route::get('/supplier/edit/{id}', 'SupplierController@edit');
    Route::get('/supplier/delete/{id}', 'SupplierController@delete');
    Route::post('/supplier/add', 'SupplierController@save')->name('supplier');
    Route::post('/supplier/edit/{id}', 'SupplierController@update')->name('editsupplier');

    Route::get('/kustomer', 'KustomerController@index');
    Route::get('/kustomer/add', 'KustomerController@add');
    Route::get('/kustomer/edit/{id}', 'KustomerController@edit');
    Route::get('/kustomer/delete/{id}', 'KustomerController@delete');
    Route::post('/kustomer/add', 'KustomerController@save')->name('kustomer');
    Route::post('/kustomer/edit/{id}', 'KustomerController@update')->name('editkustomer');

    Route::get('/user', 'UserController@index');
    Route::get('/user/add', 'UserController@add');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::post('/user/add', 'UserController@save')->name('user');
    Route::post('/user/edit/{id}', 'UserController@update')->name('edituser');

    Route::get('/penjualan', 'PenjualanController@index');
    Route::get('/penjualan/add', 'PenjualanController@add');
    Route::get('/penjualan/edit/{id}', 'PenjualanController@edit');
    Route::get('/penjualan/delete/{id}', 'PenjualanController@delete');
    Route::post('/penjualan/add', 'PenjualanController@save')->name('penjualan');
    Route::post('/penjualan/edit/{id}', 'PenjualanController@update')->name('editpenjualan');
    Route::get('/penjualan/print/{id}', 'PenjualanController@print');


    Route::post('/keranjang/tambah', 'KeranjangController@add')->name('tambahkeranjang');
    Route::get('/keranjang/delete/{id}', 'KeranjangController@delete');


    Route::get('/pembelian', 'PembelianController@index');
    Route::get('/pembelian/add', 'PembelianController@add');
    Route::get('/pembelian/edit/{id}', 'PembelianController@edit');
    Route::get('/pembelian/delete/{id}', 'PembelianController@delete');
    Route::post('/pembelian/add', 'PembelianController@save')->name('pembelian');
    Route::post('/pembelian/edit/{id}', 'PembelianController@update')->name('editpembelian');

    Route::get('/retur_penjualan', 'ReturPenjualanController@index');
    Route::get('/retur_penjualan/add', 'ReturPenjualanController@add');
    Route::get('/retur_penjualan/edit/{id}', 'ReturPenjualanController@edit');
    Route::get('/retur_penjualan/delete/{id}', 'ReturPenjualanController@delete');
    Route::post('/retur_penjualan/add', 'ReturPenjualanController@save')->name('returpenjualan');
    Route::post('/retur_penjualan/edit/{id}', 'ReturPenjualanController@update')->name('editreturpenjualan');

    Route::get('/retur_pembelian', 'ReturPembelianController@index');
    Route::get('/retur_pembelian/add', 'ReturPembelianController@add');
    Route::get('/retur_pembelian/edit/{id}', 'ReturPembelianController@edit');
    Route::get('/retur_pembelian/delete/{id}', 'ReturPembelianController@delete');
    Route::post('/retur_pembelian/add', 'ReturPembelianController@save')->name('returpembelian');
    Route::post('/retur_pembelian/edit/{id}', 'ReturPembelianController@update')->name('editreturpembelian');

    Route::get('/laporan/stok', 'LaporanController@stok');
    Route::get('/laporan/penjualan', 'LaporanController@penjualan');
    Route::get('/laporan/pembelian', 'LaporanController@pembelian');
    Route::get('/laporan/returpenjualan', 'LaporanController@returpenjualan');
    Route::get('/laporan/returpembelian', 'LaporanController@returpembelian');

    Route::get('/laporan/stok/print', 'LaporanController@printstok');
    Route::get('/laporan/penjualan/print', 'LaporanController@printpenjualan');
    Route::get('/laporan/pembelian/print', 'LaporanController@printpembelian');
    Route::get('/laporan/returpenjualan/print', 'LaporanController@printreturpenjualan');
    Route::get('/laporan/returpembelian/print', 'LaporanController@printreturpembelian');
    Route::get('/laporan/laba', 'LaporanController@laba');
    Route::get('/laporan/laba/tampilkan', 'LaporanController@tampilkanlaba');
});
