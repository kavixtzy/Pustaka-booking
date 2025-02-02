<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Looping Menu -->
    <div class="sidebar-heading">Home</div>
    <li class="nav-item active">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">Master Data</div>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Kategori Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Anggota</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">Transaksi</div>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Data Peminjaman</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Data Booking</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">Laporan</div>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Laporan Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Laporan Data Anggota</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Laporan Peminjaman</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
</ul>
<!-- End of Sidebar -->
