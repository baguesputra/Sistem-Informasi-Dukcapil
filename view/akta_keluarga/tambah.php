<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_keluarga_function.php';
  $data = new akta_keluarga(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Akta Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Keluarga</a></li>
              <li class="breadcrumb-item active">Tambah Akta Keluarga</li>
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

                    <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No KK" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">kepala_keluarga</label>
                    <select name="kepala_keluarga" id="kepala_keluarga" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                      <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
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