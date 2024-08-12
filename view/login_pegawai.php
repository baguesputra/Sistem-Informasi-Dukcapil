<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/adminlte.min.css">
  <style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .h-custom {
        height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
        height: 100%;
      }
    }
  </style>
</head>

<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-10 col-xl-5">
        <img src="../asset/img/logo_dprd.png" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="../function/login_function.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h3 >Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</h3>

          </div>

      <br>

          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" name="username" class="form-control form-control-lg" placeholder="Masukkan Username" />
            <label class="form-label" for="form3Example3">Username</label>
            <?php $message ?>
          </div>

          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Masukkan Password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin
    </div>
  </div>
</section>

<script src="../asset/plugins/jquery/jquery.min.js"></script>
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/js/adminlte.min.js"></script>
</body>
</html>
