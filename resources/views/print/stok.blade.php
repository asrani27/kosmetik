<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kosmetik Rizal | Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Kosmetik Rizal.
            <small class="float-right">Date: {{\Carbon\Carbon::today()->format('d/m/Y')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Toko Kosmetik Rizal.</strong><br>
          Jl Pramuka Km 6 Gang Melati<br>
          Phone: 0878-2134-5432<br>
          Email: kosmetikrizal@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <br><br><br>
        <address>
            <h3><strong>LAPORAN STOK BARANG</strong></h3>
            
        </address>
      </div>
      <!-- /.col -->
      {{-- <div class="col-sm-4 invoice-col">
        <b>No Transaksi {{$data->no_transaksi}}</b><br>
        <br>
        <b>Order ID:</b> {{$data->id}}<br>
        <b>Tgl Pembayaran:</b> {{$data->created_at}}<br>
        <b>Tipe Pembayaran:</b> CASH
      </div> --}}
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Stok</th>
          </tr>
          </thead>
          @php
          $no =1;
          @endphp
          <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->kode}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->satuan->nama}}</td>
                    <td>{{$item->stok}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    {{-- <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Terima Kasih Telah Berbelanja:</p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Total Pembayaran</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Grand Total:</th>
              <td>@currency($data->penjualan_detail->sum('subtotal'))</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div> --}}
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
