<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_kelahiran_function.php';
  $data = new akta_kelahiran(); 
  $id = $_GET['id'];
  $akta_kelahiran = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Kelahiran</a></li>
              <li class="breadcrumb-item active">Edit Akta Kelahiran</li>
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
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $akta_kelahiran->id ?>" placeholder="Masukkan No Akta" hidden>
                  <?php
                  $n=4;
                  function getName($n) {
                      $characters = '0123456789';
                      $randomString = '';
                   
                      for ($i = 0; $i < $n; $i++) {
                          $index = rand(0, strlen($characters) - 1);
                          $randomString .= $characters[$index];
                      }
                   
                      return $randomString;
                  }
                  
                  $a=1;
                  function getAbjad($a) {
                      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                      $randomString = '';
                   
                      for ($i = 0; $i < $a; $i++) {
                          $index = rand(0, strlen($characters) - 1);
                          $randomString .= $characters[$index];
                      }
                   
                      return $randomString;
                  }
                  
                  $b=12;
                  function getNumber($b) {
                      $characters = '0123456789';
                      $randomString = '';
                   
                      for ($i = 0; $i < $b; $i++) {
                          $index = rand(0, strlen($characters) - 1);
                          $randomString .= $characters[$index];
                      }
                   
                      return $randomString;
                  }

                  $no_akta_auto = getName($n) .".". getAbjad($a) . "/" . getAbjad($a) . "-" . getNumber($b) ;
                  ?>
                    <label for="exampleInputEmail1">No Akta</label>
                    <input type="text" name="no_akta" class="form-control" id="exampleInputEmail1" value="<?= $no_akta_auto ?>" placeholder="Masukkan No Akta">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ayah</label>
                    <select name="ayah" id="ayah" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if ($penduduk['jk']=='Laki-laki'){ ?>
                          <?php if($penduduk['id'] == $akta_kelahiran->ayah) {?>
                          <option value="<?= $akta_kelahiran->ayah ?>" selected hidden><?= $penduduk['nama'] ?></option>
                          <?php } ?>
                          <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wanita</label>
                    <select name="ibu" id="ibu" class="form-control">
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if($penduduk['id'] == $akta_kelahiran->ibu) {?>
                        <option value="<?= $akta_kelahiran->ibu ?>" selected hidden><?= $penduduk['nama'] ?></option>
                        <?php } ?>
                        <?php if ($penduduk['jk']=='Perempuan'){ ?>
                          <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->nama ?>" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control">
                      <option value="<?= $akta_kelahiran->jk ?>" selected hidden><?= $akta_kelahiran->jk ?></option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" name="tempat" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tempat ?>" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" name="tgl_dibuat" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tgl_dibuat ?>" placeholder="Masukkan Tanggal Dibuat">
                  </div>
                  <input type="text" name="updated_by" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['id_penduduk'] ?>" hidden>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $akta_kelahiran->updated_by) {?>
                          <a href=""  class="btn btn-primary">Diedit Terakhir Oleh <span class="badge badge-light"><?= $penduduk['nama'] ?></span></a>
                          
                       
                        <?php }} ?>
                        <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->status?>" placeholder="Masukkan Agenda">
                
                
              
                 
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