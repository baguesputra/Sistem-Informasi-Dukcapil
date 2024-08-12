<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_perkawinan_function.php';
  $data = new akta_perkawinan(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Akta Perkawinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Perkawinan</a></li>
              <li class="breadcrumb-item active">Tambah Akta Perkawinan</li>
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
            <div class="card card-dark">
              <div class="card-header">
               
              </div>
              <form id="quickForm" action="proses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    
                    <input type="text" name="no" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No Akta" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pria</label>
                    <select name="nama_pria" id="nama_pria" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if ($penduduk['jk']=='Laki-laki'){ ?>
                      <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wanita</label>
                    <select name="nama_wanita" id="nama_wanita" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if ($penduduk['jk']=='Perempuan'){ ?>
                      <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Nikah</label>
                    <input type="date" name="tgl_nikah" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Nikah</label>
                    <input type="text" name="tempat_nikah" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Kartu Keluarga</label>
                    <input type="file" name="berkas_kk" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Surat Keterangan Domisili</label>
                    <input type="file" name="berkas_skd" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Surat Keterangan Perkawinan</label>
                    <input type="file" name="berkas_skp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Ktp Suami dan Istri</label>
                    <input type="file" name="berkas_ktp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Pas Photo</label>
                    <input type="file" name="berkas_photo" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berkas Akta Kelahrian</label>
                    <input type="file" name="berkas_akkel" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" name="tgl_dibuat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Dibuat">
                  </div>
                  <input type="text" name="updated_by" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['id_penduduk'] ?>" hidden>
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="0" placeholder="Masukkan Agenda">
                </div>
                <!-- /.card-body -->
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