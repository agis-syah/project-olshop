<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
    <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>App</b> Elektronik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('user') }}" class="d-block">
                    {{ ucfirst(auth::user()->name)}}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Input
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{ route("databarang.index") }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Data Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route("barangmasuk.index") }}" class="nav-link">
                                    <i class="fas fa-check-circle nav-icon"></i>
                                    <p>Barang Masuk</p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ route("ongkir.index") }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Data Ongkir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="return" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Return Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("customer.index") }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Data Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("supplier.index") }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Data Supplier</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{ route('pages.laporan.stok') }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Stok Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.laporan.penjualan') }}" class="nav-link">
                                    <i class="fas fa-check-circle nav-icon"></i>
                                    <p>Penjualan</p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.laporan.return.list') }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Return Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.laporan.barangmasuk') }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Barang Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form')
                    .submit();">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Sign Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>