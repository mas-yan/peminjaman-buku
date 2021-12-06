<?php
$page = @$_GET['page'];
if ($page == 'dashboard'  || $page == '') {
  $dashboard = 'active';
} else if ($page == 'kategori') {
  $kategori = 'active';
} else if ($page == 'buku') {
  $buku = 'active';
} else if ($page == 'rak') {
  $rak = 'active';
} else if ($page == 'peminjaman') {
  $peminjaman = 'active';
} else if ($page == 'anggota') {
  $anggota = 'active';
}
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= baseUrl() ?>" class="brand-link">
    <!-- <img src="<?= baseUrl('/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Perpus</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">Dasboard</li>
        <li class="nav-item">
          <a href="?page=dashboard" class="nav-link <?= $dashboard ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">Manajemen Buku</li>
        <li class="nav-item">
          <a href="<?= baseUrl('public/?page=kategori') ?>" class="nav-link <?= $kategori ?>">
            <i class="nav-icon fas fa-align-justify"></i>
            <p>
              Kategori Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=rak" class="nav-link <?= $rak ?>">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>
              Rak Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=buku" class="nav-link <?= $buku ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Buku
            </p>
          </a>
        </li>
        <li class="nav-header">Peminjaman Buku</li>
        <li class="nav-item">
          <a href="?page=peminjaman" class="nav-link <?= $peminjaman ?>">
            <i class="nav-icon fas fa-book-reader"></i>
            <p>
              Peminjaman Buku
            </p>
          </a>
        </li>
        <li class="nav-header">Anggota</li>
        <li class="nav-item">
          <a href="?page=anggota" class="nav-link <?= $anggota ?>">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              anggota Perpus
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>