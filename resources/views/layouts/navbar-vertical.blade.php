<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <div class="h3 text-white text-center">Aplikasi <br> Pengelolaan <br>Atribut</div>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow {{ ($active === "dashboard") ? 'active' : '' }}" href="{{ url('/') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "jenis_penjualan") ? 'active' : '' }}"
                    href="{{ route('jenis-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Jenis Atribut
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "barang_penjualan") ? 'active' : '' }}"
                    href="{{ route('barang-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Atibut
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "master_penjualan") ? 'active' : '' }}"
                    href="{{ route('master-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Master Penjualan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "transaksi_penjualan") ? 'active' : '' }}"
                    href="{{ route('transaksi-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Log Transaksi
                </a>
            </li>

        </ul>
    </div>
</nav>
