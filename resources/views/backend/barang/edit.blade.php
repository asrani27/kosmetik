@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Barang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('editbarang',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode" value="{{$data->kode}}" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Satuan</label>
                      <div class="col-sm-10">
                          <select name="satuan_id" class="form-control">
                              @foreach ($satuan as $item)
                                @if($data->satuan_id == $item->id)
                                <option value="{{$item->id}}" selected>{{$item->nama}}</option> 
                                @else
                                <option value="{{$item->id}}">{{$item->nama}}</option> 
                                @endif
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Beli</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga_beli" value="{{$data->harga_beli}}" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Jual</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga_jual"  value="{{$data->harga_jual}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="stok" value="{{$data->stok}}">
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Simpan</button>
                    <a href="/barang" class="btn btn-default float-right">Kembali</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')
@endpush
