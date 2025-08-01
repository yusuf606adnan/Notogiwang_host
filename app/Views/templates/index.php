<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tambahkan SweetAlert2 CSS di <head> -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Tambahkan SweetAlert2 JS di bagian bawah halaman sebelum tag penutupan </body> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?= base_url('assets') ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/summernote/summernote-bs4.min.css">
  <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src=" <?= base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-secondary navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="dashboard" class="nav-link text-white">Home</a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Kontak
    </a>
    <div class="dropdown-menu" aria-labelledby="contactDropdown">
        <a class="dropdown-item text-success bg-light" href="https://wa.me/6285183986701" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
        <a class="dropdown-item text-black bg-light" href="mailto:myusufadnann@email.com" target="_blank">
            <i class="fas fa-envelope"></i> Email
        </a>
        <a class="dropdown-item text-danger bg-light" href="https://www.instagram.com/myubatik" target="_blank">
            <i class="fab fa-instagram"></i> Instagram
        </a>
    </div>
</li>

    </ul>

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto"> -->
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <!-- <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div> -->
      <!-- </li> -->

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->

            <!-- <div class="media">
              <img src=" <?= base_url('assets') ?>/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->

            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->

            <!-- <div class="media">
              <img src=" <?= base_url('assets') ?>/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- <div class="media">
              <img src=" <?= base_url('assets') ?>/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->

            <!-- Message End -->
          <!-- </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->

      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a> -->

        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div> -->

      <!-- </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary bg-secondary elevation-4" >
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img src="<?= base_url('uploads/sismakar.png') ?>" alt="Description of image" style="width: 50px; height: auto;">
      <span class="brand-text font-weight-light"><b>SISMAKAR</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src=" <?= base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block text-white"><?= $_SESSION['username']; ?></a>
    </div>
</div>



      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--<li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-white" style=" font-size: 24px;"></i>
                <p class="text-white">Dashboard</p>
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('/organization') ?>" class="nav-link">
            <i class="fas fa-user" style="font-size: 24px;"></i>
                Struktur Organisasi
              </p>
            </a>
          </li> -->
          <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-file-import text-white" style="font-size: 24px;"></i>
        <p class="text-white">
            Surat Masuk
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="<?= base_url('/suratmasuk') ?>" class="nav-link">
                <i class="fas fa-envelope nav-icon text-white"></i>
                <p class="text-white">Surat Masuk</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('/undangan') ?>" class="nav-link">
                <i class="fas fa-file-alt nav-icon text-white"></i>
                <p class="text-white">Undangan</p>
            </a>
        </li>
    </ul>
</li>


          <li class="nav-item">
            <a href="<?= base_url('/suratkeluar') ?>" class="nav-link">
            <i class="nav-icon fas fa-file-export text-white" style="font-size: 24px;"></i>
                <p class="text-white">Surat Keluar</p>
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('/pembayaran') ?>" class="nav-link">
            <i class="nav-icon fas fa-wallet" style="font-size: 24px;"></i>
                Pembayaran
              </p>
            </a>
          </li> -->
          <!-- Tombol Logout -->
          <li class="nav-item">
              <a href="#" id="logoutBtn" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt text-white"></i>
                  <p class="text-white">Logout</p>
              </a>
          </li>

<script>
    // Flag untuk memastikan konfirmasi logout hanya terjadi sekali
    let isLogoutConfirmed = false;

    // Event listener untuk tombol logout
    document.getElementById('logoutBtn').addEventListener('click', function(event) {
        event.preventDefault();  // Mencegah URL logout langsung dijalankan
        
        // Debugging untuk melihat apakah tombol logout dipanggil lebih dari sekali
        console.log('Logout button clicked');
        
        // Pastikan hanya satu konfirmasi yang muncul
        if (!isLogoutConfirmed) {
            isLogoutConfirmed = true;  // Menandai bahwa konfirmasi sudah tampil

            // Menampilkan konfirmasi SweetAlert2
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari akun ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, logout!',
                cancelButtonText: 'Tidak, batalkan',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika memilih Ya, lakukan logout
                    window.location.href = "<?= site_url('logout') ?>"; // Ganti dengan URL logout yang benar
                } else {
                    // Jika memilih Tidak, biarkan pengguna tetap di halaman yang sama
                    window.location.href = "<?= site_url('dashboard') ?>";  // Ganti dengan URL yang sesuai
                }

                // Reset flag setelah konfirmasi selesai
                isLogoutConfirmed = false;
            });
        }
    });
</script>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1 class="m-0">SISMAKAR</h1>
          </div>/.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?= $this->renderSection('content'); ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 <a href="">Sismakar</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>


 



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets') ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets') ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets') ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src=" <?= base_url('assets') ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" <?= base_url('assets') ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" <?= base_url('assets') ?>/dist/js/pages/dashboard.js"></script>
</body>
</html>
