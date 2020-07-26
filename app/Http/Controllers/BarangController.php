<?php

namespace App\Http\Controllers;

use Alert;
use App\Barang;
use App\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('backend.barang.index',compact('data'));
    }

    public function add()
    {
        $satuan = Satuan::all();
        $check = Barang::all();
        if(count($check) == 0){
            $kode = '0001';
        }else{
            $number = count($check)+1;
            if(strlen($number) == 1){
                $kode = '000'.$number;
            }elseif(strlen($number) == 2){
                $kode = '00'.$number;
            }elseif(strlen($number) == 3){
                $kode = '0'.$number;
            }elseif(strlen($number) == 4){
                $kode = $number;
            }
        }
        return view('backend.barang.add',compact('satuan','kode'));
    }

    public function save(Request $req)
    {
        $s = new Barang;
        $s->kode = $req->kode;
        $s->nama = $req->nama;
        $s->satuan_id = $req->satuan_id;
        $s->harga_beli = $req->harga_beli;
        $s->harga_jual = $req->harga_jual;
        $s->stok = $req->stok;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/barang');
    }

    public function edit($id)
    {
        $data = Barang::find($id);
        $satuan = Satuan::all();
        return view('backend.barang.edit',compact('data','satuan'));
    }
    
    public function update(Request $req, $id)
    {
        $s = Barang::find($id);
        $s->nama = $req->nama;
        $s->satuan_id = $req->satuan_id;
        $s->harga_beli = $req->harga_beli;
        $s->harga_jual = $req->harga_jual;
        $s->stok = $req->stok;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/barang');
    }
    
    public function delete($id)
    {
        $delete = Barang::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
