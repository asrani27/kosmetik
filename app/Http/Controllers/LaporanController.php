<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pembelian;
use App\Penjualan;
use App\Retur_pembelian;
use App\Retur_penjualan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function stok()
    {
        return view('laporan.stok');
    }
    public function penjualan()
    {
        return view('laporan.penjualan');
    }
    public function pembelian()
    {
        return view('laporan.pembelian');
    }
    public function returpenjualan()
    {
        return view('laporan.returpenjualan');
    }
    public function returpembelian()
    {
        return view('laporan.returpembelian');
    }
    public function printstok()
    {
        $data = Barang::all();
        return view('print.stok',compact('data'));
    }
    public function printpenjualan()
    {
        $data = Penjualan::all();
        return view('print.penjualan',compact('data'));
    }
    public function printpembelian()
    {
        $data = Pembelian::all();
        return view('print.pembelian',compact('data'));
    }
    public function printreturpenjualan()
    {
        $data = Retur_penjualan::all();
        return view('print.returpenjualan',compact('data'));
    }
    public function printreturpembelian()
    {
        $data = Retur_pembelian::all();
        return view('print.returpembelian',compact('data'));
    }
}
