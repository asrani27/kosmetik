<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $barang = count(Barang::all());
        $penjualan = count(Penjualan::whereDate('created_at', Carbon::today())->get());
        
        return view('backend.home',compact('barang','penjualan'));
    }
}
