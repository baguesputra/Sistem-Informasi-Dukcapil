<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/perubahan_akta_keluarga_function.php';
  $data = new perubahan_akta_keluarga(); 
  $id = $_GET['id'];
  $perubahan_akta_keluarga = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Perubahan Akta Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Perubahan Akta Keluarga</a></li>
              <li class="breadcrumb-item active">Edit Perubahan Akta Keluarga</li>
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
                  <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->id ?>" placeholder="Masukkan Nama" hidden>
                    <label for="exampleInputEmail1">No Akta</label>
                    <select name="no_akta" id="no_akta" class="form-control">
                      
                      <?php foreach ($data->akta_keluarga() as $akta_keluarga): {?>
                        <?php if($akta_keluarga['id'] == $perubahan_akta_keluarga->no_akta) {?>
                        <option value="<?= $akta_keluarga['id']; ?>" selected hidden><?= $akta_keluarga['no_kk']; ?></option>
                        <?php } ?>
                      <option value="<?= $akta_keluarga['id']; ?>"><?= $akta_keluarga['no_kk']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                    <input type="date" name="tgl_pengajuan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->tgl_pengajuan ?>" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengubahan</label>
                    <input type="date" name="tgl_pengubahan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->tgl_pengubahan ?>" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perubahan</label>
                    <input type="text" name="perubahan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->perubahan ?>" placeholder="Masukkan Perubahan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alasan</label>
                    <input type="text" name="alasan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->alasan ?>" placeholder="Masukkan Alasan">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Dokumen Pendukung</label>
                    <input type="file" name="dokumen" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                    <a href="../../arsip/perubahan akta keluarga/<?= $perubahan_akta_keluarga->dokumen ?>"><?= $perubahan_akta_keluarga->dokumen ?></a>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Awal</label>
                    <input type="file" name="akta_awal" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                    <a href="../../arsip/perubahan akta keluarga/<?= $perubahan_akta_keluarga->akta_awal ?>"><?= $perubahan_akta_keluarga->akta_awal ?></a>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Perubahan</label>
                    <input type="file" name="akta_perubahan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                    <a href="../../arsip/perubahan akta keluarga/<?= $perubahan_akta_keluarga->akta_perubahan ?>"><?= $perubahan_akta_keluarga->akta_perubahan ?></a>
                  </div> -->
                  <input type="text" name="updated_by" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['id_penduduk'] ?>" hidden>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $perubahan_akta_keluarga->updated_by) {?>
                          <a href=""  class="btn btn-primary">Diedit Terakhir Oleh <span class="badge badge-light"><?= $penduduk['nama'] ?></span></a>
                          
        
                        <?php }} ?>
                 
                
                        <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_keluarga->status?>" placeholder="Masukkan Agenda">
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-success">Edit</button>
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