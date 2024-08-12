<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_perkawinan_function.php';
  $data = new akta_perkawinan(); 
  $id = $_GET['id'];
  $akta_perkawinan = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Akta Perkawinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Perkawinan</a></li>
              <li class="breadcrumb-item active">Edit Akta Perkawinan</li>
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
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $akta_perkawinan->id ?>" placeholder="Masukkan No Akta" hidden>
                 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pria</label>
                    <select name="nama_pria" id="nama_pria" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if ($penduduk['jk']=='Laki-laki'){ ?>
                          <?php if($penduduk['id'] == $akta_perkawinan->nama_pria) {?>
                          <option value="<?= $akta_perkawinan->nama_pria ?>" selected hidden><?= $penduduk['nama'] ?></option>
                          <?php } ?>
                          <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wanita</label>
                    <select name="nama_wanita" id="nama_wanita" class="form-control">
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if($penduduk['id'] == $akta_perkawinan->nama_wanita) {?>
                        <option value="<?= $akta_perkawinan->nama_pria ?>" selected hidden><?= $penduduk['nama'] ?></option>
                        <?php } ?>
                        <?php if ($penduduk['jk']=='Perempuan'){ ?>
                          <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Nikah</label>
                    <input type="date" name="tgl_nikah" class="form-control" id="exampleInputPassword1" value="<?= $akta_perkawinan->tgl_nikah ?>" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Nikah</label>
                    <input type="text" name="tempat_nikah" class="form-control" id="exampleInputPassword1" value="<?= $akta_perkawinan->tempat_nikah ?>" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" name="tgl_dibuat" class="form-control" id="exampleInputPassword1" value="<?= $akta_perkawinan->tgl_dibuat ?>" placeholder="Masukkan Tanggal Dibuat">
                  </div>
                  <input type="text" name="updated_by" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['id_penduduk'] ?>" hidden>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $akta_perkawinan->updated_by) {?>
                          <a href=""  class="btn btn-primary">Diedit Terakhir Oleh <span class="badge badge-light"><?= $penduduk['nama'] ?></span></a>
                          
                       
                        <?php }} ?>
                        <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $akta_perkawinan->status?>" placeholder="Masukkan Agenda">
                 
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