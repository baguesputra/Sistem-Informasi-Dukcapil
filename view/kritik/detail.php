<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/kritik_function.php';
  $data = new kritik(); 
  $id = $_GET['id'];
  $kritik = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Kritik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Kritik</a></li>
              <li class="breadcrumb-item active">Detail Kritik</li>
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
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" value="<?= $kritik->tgl ?>" placeholder="Masukkan No Agenda" readonly>
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $kritik->id ?>" placeholder="Masukkan No Agenda" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?= $kritik->nama ?>" placeholder="Masukkan Nama Lengkap" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Panggilan</label>
                    <input type="text" name="panggilan" class="form-control" id="exampleInputPassword1" value="<?= $kritik->panggilan ?>" placeholder="Masukkan Nama Panggilan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instansi</label>
                    <input type="text" name="instansi" class="form-control" id="exampleInputPassword1" value="<?= $kritik->instansi ?>" placeholder="Masukkan Instansi" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $kritik->alamat ?>" placeholder="Masukkan Alamat" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputPassword1" value="<?= $kritik->kota ?>" placeholder="Masukkan Kota" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= $kritik->email ?>" placeholder="Masukkan Email" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" value="<?= $kritik->no ?>" placeholder="Masukkan No" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kritik dan Saran</label>
                    <input type="text" name="kritik" class="form-control" id="exampleInputPassword1" value="<?= $kritik->kritik ?>" placeholder="Masukkan keterangan" readonly>
                  </div>  
                </div>
                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-success">Ubah</button>
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