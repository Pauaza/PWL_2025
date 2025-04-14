<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
    /* Warna default menu navbar */
    .menu-item {
      color: #bbb !important; /* Warna default yang lebih terang untuk teks dan ikon */
      transition: color 0.3s ease !important;
    }

    /* Warna saat hover pada menu */
    .menu-item:hover {
      color: #fff !important; /* Warna saat hover menjadi lebih terang */
    }

    /* Warna ikon yang lebih terang saat hover */
    .menu-item i {
      color: #bbb !important; /* Warna default ikon */
      transition: color 0.3s ease !important;
    }

    /* Warna ikon saat hover */
    .menu-item:hover i {
      color: #fff !important; /* Ikon lebih terang saat hover */
    }

    /* Warna saat menu aktif atau dipilih */
    .menu-item:focus, .menu-item:active {
      color: #888 !important; /* Warna sedikit lebih gelap saat elemen aktif atau dipencet */
    }

    /* Warna ikon saat aktif */
    .menu-item:focus i, .menu-item:active i {
      color: #888 !important; /* Ikon sedikit lebih gelap saat aktif */
    }
  </style>
</head>
<body>
  <nav class="main-header navbar navbar-expand navbar-gray navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link menu-item" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link menu-item">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link menu-item">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link menu-item" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link menu-item" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <!-- Dropdown content here -->
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link menu-item" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <!-- Dropdown content here -->
      </li>

      <li class="nav-item">
        <a class="nav-link menu-item" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
</body>
</html>
