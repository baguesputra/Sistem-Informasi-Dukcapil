<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/kritik_function.php';
  $data = new kritik(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kritik dan Saran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Kritik dan Saran</a></li>
              <li class="breadcrumb-item active">Tambah Kritik dan Saran</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form id="quickForm" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Agenda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Panggilan</label>
                    <input type="text" name="panggilan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Panggilan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instansi</label>
                    <input type="text" name="instansi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Instansi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PKritik dan Saran</label>
                    <input type="text" name="kritik" class="form-control" id="exampleInputPassword1" placeholder="Masukkan keterangan">
                  </div>  
                </div>
                <div class="card-footer">
                  <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>