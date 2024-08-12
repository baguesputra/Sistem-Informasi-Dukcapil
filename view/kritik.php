<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../asset/img/logo_dprd.png" />
  <title>DUKCAPIL Banjarmasin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/adminlte.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
  <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="beranda.php">
      <img src="../asset/img/logo_dprd.png" width="30" height="30" class="d-inline-block align-top" alt="">
      DUKCAPIL Banjarmasin
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="beranda.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Masyarakat</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="kritik.php">Kritik dan Saran</a>
            <a class="dropdown-item" href="pengaduan.php">Pengaduan</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="login.php">
            Login
          </a>
        </li>
      </ul>
    </div>
</nav>

<style>
</style>
</head>

<body>
<main role="main">
<div class="container marketing" style="margin-top:50px;">

 

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Kritik dan Saran</h2> </div>
  
</div>

<form method="post" action="proses_kritik.php">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="nama" id="form6Example1" class="form-control" />
        <input type="date" name="tgl" id="form6Example1" value="<?php echo date('Y-m-d'); ?>" class="form-control" hidden>
        <label class="form-label" for="form6Example1">Nama Lengkap</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="panggilan" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Nama Panggilan</label>
      </div>
    </div>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="instansi" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">Instansi</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="alamat" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Alamat</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="kota" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Kota</label>
  </div>

  <div class="form-outline mb-4">
    <input type="email" name="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" name="no" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">No</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="kritik" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Kritik dan Saran</label>
  </div>

  <button type="submit" name="kirim" class="btn btn-primary btn-block mb-4">Kirim</button>
</form>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/js/adminlte.min.js"></script>

</body>
</html>
