<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" href="../../asset/img/logo_dprd.png" />
  <title>Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../asset/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../asset/css/adminlte.min.css">
  <link rel="stylesheet" href="../../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../asset/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../asset/plugins/summernote/summernote-bs4.min.css">
</head>
<?php
	    session_start();
	    if (!isset($_SESSION['username'])) {
	        header('location:../login.php');
	    }
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../asset/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <?= $_SESSION['username']?>
          <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="../../function/logout_function.php" class="dropdown-item">
            Logout
          </a>
      </li>
    </ul>

</nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../index.php" class="brand-link">
      <img src="../../asset/img/logo_dprd.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DISDUKCAPIL</span>
    </a>

    <?php include('menu2.php')?>


     
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="../../asset/plugins/jquery/jquery.min.js"></script>
<script src="../../asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../asset/plugins/chart.js/Chart.min.js"></script>
<script src="../../asset/plugins/sparklines/sparkline.js"></script>
<script src="../../asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../../asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../../asset/plugins/moment/moment.min.js"></script>
<script src="../../asset/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../asset/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../asset/js/adminlte.js"></script>
<script src="../../asset/js/pages/dashboard.js"></script>
</body>
</html>
  

