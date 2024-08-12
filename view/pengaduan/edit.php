<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pengaduan_function.php';
  $data = new pengaduan(); 
  $id = $_GET['id'];
  $pengaduan = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Pengaduan</a></li>
              <li class="breadcrumb-item active">Edit Pengaduan</li>
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
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->tgl ?>" placeholder="Masukkan No Agenda">
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->id ?>" placeholder="Masukkan No Agenda" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->nama ?>" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Panggilan</label>
                    <input type="text" name="panggilan" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->panggilan ?>" placeholder="Masukkan Nama Panggilan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instansi</label>
                    <input type="text" name="instansi" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->instansi ?>" placeholder="Masukkan Instansi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->alamat ?>" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->kota ?>" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->email ?>" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->no ?>" placeholder="Masukkan No">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengaduan</label>
                    <input type="text" name="pengaduan" class="form-control" id="exampleInputPassword1" value="<?= $pengaduan->pengaduan ?>" placeholder="Masukkan keterangan">
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