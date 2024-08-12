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
      <li class="nav-item active">
        <a class="nav-link" href="beranda.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
     
   
      <li class="nav-item">
        <a class="nav-link" href="kritik.php">Kritik dan Saran</a>
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
    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }

    .carousel {
      margin-bottom: 4rem;
    }
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    .carousel-item {
      height: 32rem;
      background-color: #777;
    }
    .carousel-item > img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }

    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    .marketing h2 {
      font-weight: 400;
    }
    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    .featurette-divider {
      margin: 5rem 0;
    }

    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }

    @media (min-width: 40em) {
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
</style>
</head>

<body>
<main role="main">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="../asset/img/foto1.jpeg" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>DUKCAPIL Banjarmasin</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="../asset/img/foto2.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Visi Misi</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="../asset/img/foto3.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Kegiatan</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>&copy; 2022 DUKCAPIL Banjarmasin<a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/js/adminlte.min.js"></script>

</body>
</html>
