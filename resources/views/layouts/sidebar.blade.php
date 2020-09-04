<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kosmetik Rizal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/satuan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/supplier" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kustomer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kustomer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/penjualan/add" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksi Penjualan</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="/penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembelian/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/retur_pembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Retur Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/laporan/stok" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Stok Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan/customer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan/supplier" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan/pengeluaran" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Pengeluaran</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="/laporan/penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan/pembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan/returpembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Retur Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan/laba" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Laba</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-window-close"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>