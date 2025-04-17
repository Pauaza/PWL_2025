<div class="sidebar">
    <style>
        /* Warna background sidebar yang disamakan dengan header */
        .sidebar {
            background-color: #343a40 !important; /* Ubah ini sesuai dengan warna background header */
        }

        /* Warna default menu navbar (sidebar) */
        .sidebar .nav-link {
            color: #bbb !important; /* Warna default lebih terang */
            transition: color 0.3s ease !important;
        }

        /* Warna saat hover pada menu */
        .sidebar .nav-link:hover {
            color: #fff !important; /* Warna lebih terang saat hover */
        }

        /* Warna ikon yang lebih terang saat hover */
        .sidebar .nav-link i {
            color: #bbb !important; /* Warna default ikon */
            transition: color 0.3s ease !important;
        }

        /* Warna ikon saat hover */
        .sidebar .nav-link:hover i {
            color: #fff !important; /* Ikon lebih terang saat hover */
        }

        /* Warna saat menu aktif atau dipilih */
        .sidebar .nav-link.active {
            color: #888 !important; /* Warna sedikit lebih gelap saat aktif */
        }

        /* Warna ikon saat aktif */
        .sidebar .nav-link.active i {
            color: #888 !important; /* Ikon sedikit lebih gelap saat aktif */
        }

        /* Warna untuk header section di sidebar */
        .sidebar .nav-header {
            color: #ddd !important; /* Warna header lebih terang */
            font-weight: bold;
        }
    </style>

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Foto Profil Pengguna -->
    <div class="user-profile text-center py-4 border-bottom" style="border-color: rgba(255, 255, 255, 0.1);">
        @if (auth()->user()->foto)
            <img src="{{ asset('foto/' . auth()->user()->foto) }}?v={{ time() }}" alt="Foto Profil"
                class="rounded-circle shadow-sm"
                style="width: 70px; height: 70px; object-fit: cover; background: transparent;">
        @else
            <img src="{{ asset('foto/default-avatar.png') }}?v={{ time() }}" class="rounded-circle shadow-sm"
                style="width: 70px; height: 70px; object-fit: cover; background: transparent;">
        @endif

        <div class="user-info mt-3">
            <p class="font-weight-bold text-white mb-0" style="font-size: 16px;">{{ auth()->user()->nama }}</p>
            <small class="text-secondary">{{ auth()->user()->email }}</small>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <hr class="my-3 border-t border-white/20">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'welcome' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Data Pengguna</li>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ $activeMenu == 'level' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Level User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ $activeMenu == 'user' ? 'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data User</p>
                </a>
            </li>
            <li class="nav-header">Data Barang</li>
            <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link {{ $activeMenu == 'kategori' ? 'active' : '' }}">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Kategori Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/barang') }}" class="nav-link {{ $activeMenu == 'barang' ? 'active' : '' }}">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="nav-header">Data Transaksi</li>
            <li class="nav-item">
                <a href="{{ url('/stok') }}" class="nav-link {{ $activeMenu == 'stok' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Stok Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/penjualan') }}" class="nav-link {{ $activeMenu == 'penjualan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Transaksi Penjualan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link text-danger {{ $activeMenu == 'logout' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>LogOut</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
