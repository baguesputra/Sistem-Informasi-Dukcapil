<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pelanggan_function.php';
  $data = new pelanggan(); 
  $id = $_GET['id'];
  $pegawai = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Pelanggan</a></li>
              <li class="breadcrumb-item active">Detail Pelanggan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $pegawai->nama ?>" placeholder="Masukkan Nama Lengkap" readonly>
                    <input type="nama" name="id" class="form-control" id="exampleInputEmail1" value="<?= $pegawai->id ?>" placeholder="Masukkan Nama Lengkap" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->jk ?>" placeholder="Masukkan Jenis Kelamin" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Agama</label>
                    <input type="text" name="agama" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->agama ?>" placeholder="Masukkan Agama" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->alamat ?>" placeholder="Masukkan Alamat" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->email ?>" placeholder="Masukkan Email" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->no ?>" placeholder="Masukkan Nomor" readonly>
                  </div>
                 
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