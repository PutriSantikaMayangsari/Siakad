<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Universitas Lampung - SIM Akademik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/AdminLTE/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="icon" type="img/png" href="https://siakadu.unila.ac.id/assets/v1/img/logo_unila.png" sizes="16x16" />
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="" class="navbar-brand">
          <img src="https://siakadu.unila.ac.id/assets/v1/img/logo_unila.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Sistem Informasi Akademik</span><br>
        </a>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/home" class="nav-link">Beranda Administrator</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Portal</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="/mahasiswa" class="dropdown-item">Data Mahasiswa </a></li>
                <li><a href="absensi" class="dropdown-item">Data Dosen </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perkuliahan</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="/krs" class="dropdown-item">Kartu Rencana Studi </a></li>
                <li><a href="/jadwal" class="dropdown-item">Kartu Hasil Studi </a></li>
                <li><a href="/krs" class="dropdown-item">Jadwal Mengajar </a></li>
                <li><a href="/krs" class="dropdown-item">Absensi </a></li>
              </ul>
            </li>
        </div>
        <!-- Right navbar links -->
        <div class="navbar-custom-menu"></div>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">Dokumen Pendukung / UG</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> Panduan Siakad Admin
              </a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" href="/gate">
              <i class="fas fa-th-large"></i> Menu
            </a>
          </li>
          <!-- User Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-th-large"></i> Administrator
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="container">
                <img src="<?= base_url() ?>/template/dist/img/user8-128x128.jpg" class="img-circle" alt="userimage">
                <p> Muhammad Rizky <br>
                  <small> Administrator Siakad Unila</small>
                </p>
              </div>
              <div class="dropdown-divider"></div>
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#revenue-chart" class="btn btn-default btn-default">Ganti Foto Profil</a>
                </li>
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/login" class="btn btn-block btn-default">Keluar</a>
                  </li>
            </div>
          </li>
        </ul>
      </div>
      </li>
      </ul>
  </div>
  </nav>
  </div>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= esc($title) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda Admin</a></li>
              <li class="breadcrumb-item"><a href="#"><?= esc($title) ?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <?= $this->renderSection('content') ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Praktikum Web Lanjut
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 </strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/AdminLTE/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/AdminLTE/dist/js/demo.js"></script>
  <script src="/assets/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function() {
      $('#deskripsi').summernote();
    })
  </script>
</body>

</html>