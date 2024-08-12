<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/perubahan_akta_kelahiran_function.php';
  $data = new perubahan_akta_kelahiran(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Perubahan Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Perubahan Akta Kelahiran</a></li>
              <li class="breadcrumb-item active">Tambah Perubahan Akta Kelahiran</li>
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
                    <label for="exampleInputEmail1">No Akta</label>
                    <select name="no_akta" id="no_akta" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->akta_kelahiran() as $akta_kelahiran): {?>
                      <option value="<?= $akta_kelahiran['id']; ?>"><?= $akta_kelahiran['no_akta']; ?>-<?= $akta_kelahiran['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                    <input type="date" name="tgl_pengajuan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengubahan</label>
                    <input type="date" name="tgl_pengubahan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perubahan</label>
                    <input type="text" name="perubahan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Perubahan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alasan</label>
                    <input type="text" name="alasan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alasan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dokumen Pendukung</label>
                    <input type="file" name="dokumen" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Awal</label>
                    <input type="file" name="akta_awal" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Perubahan</label>
                    <input type="file" name="akta_perubahan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <input type="text" hidden name="updated_by" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['id_penduduk'] ?>">
                 
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="0" placeholder="Masukkan Agenda" hidden>
              
                 
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