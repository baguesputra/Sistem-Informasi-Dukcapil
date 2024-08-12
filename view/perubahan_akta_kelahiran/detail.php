<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/perubahan_akta_kelahiran_function.php';
  $data = new perubahan_akta_kelahiran(); 
  $id = $_GET['id'];
  $perubahan_akta_kelahiran = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lihat Perubahan Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Perubahan Akta Kelahiran</a></li>
              <li class="breadcrumb-item active">Lihat Perubahan Akta Kelahiran</li>
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
                  <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_kelahiran->id ?>" placeholder="Masukkan Nama" hidden>
                    <label for="exampleInputEmail1">No Akta</label>
                    <select name="no_akta" id="no_akta" class="form-control" readonly>
                      
                      <?php foreach ($data->akta_kelahiran() as $akta_kelahiran): {?>
                        <?php if($akta_kelahiran['id'] == $perubahan_akta_kelahiran->no_akta) {?>
                        <option value="<?= $akta_kelahiran['id']; ?>" selected hidden><?= $akta_kelahiran['no_akta']; ?>-<?= $akta_kelahiran['nama']; ?></option>
                        <?php } ?>
                      <option value="<?= $akta_kelahiran['id']; ?>"><?= $akta_kelahiran['no_akta']; ?>-<?= $akta_kelahiran['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                    <input type="date" name="tgl_pengajuan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_kelahiran->tgl_pengajuan ?>" placeholder="Masukkan Nama" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengubahan</label>
                    <input type="date" name="tgl_pengubahan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_kelahiran->tgl_pengubahan ?>" placeholder="Masukkan Tanggal Lahir"readonly >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perubahan</label>
                    <input type="text" name="perubahan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_kelahiran->perubahan ?>" placeholder="Masukkan Perubahan"readonly >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alasan</label>
                    <input type="text" name="alasan" class="form-control" id="exampleInputPassword1" value="<?= $perubahan_akta_kelahiran->alasan ?>" placeholder="Masukkan Alasan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dokumen Pendukung</label>
                    
                    <a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran->dokumen ?>"><?= $perubahan_akta_kelahiran->dokumen ?></a>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Awal</label>
                    
                    <a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran->akta_awal ?>"><?= $perubahan_akta_kelahiran->akta_awal ?></a>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Akta Perubahan</label>
                    
                    <a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran->akta_perubahan ?>"><?= $perubahan_akta_kelahiran->akta_perubahan ?></a>
                  </div>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $perubahan_akta_kelahiran->updated_by) {?>
                          <a href=""  class="btn btn-primary">Diedit Terakhir Oleh <span class="badge badge-light"><?= $penduduk['nama'] ?></span></a>
                          
                       
                        <?php }} ?>
                 
                
              
                 
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-success">Edit</button>
                </div> -->
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>