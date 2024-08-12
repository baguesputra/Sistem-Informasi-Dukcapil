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
            <h1>Detail Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Kelahiran</a></li>
              <li class="breadcrumb-item active">Detail Akta Kelahiran</li>
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
                    <input type="text" name="no_akta" class="form-control" id="exampleInputEmail1" value="<?= $akta_kelahiran->no_akta ?>" placeholder="Masukkan No Akta" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->nama ?>" placeholder="Masukkan Nama" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" readonly>
                      <option value="<?= $akta_kelahiran->jk ?>" selected hidden><?= $akta_kelahiran->jk ?></option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" name="tempat" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tempat ?>" placeholder="Masukkan Tempat Lahir" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" name="tgl_dibuat" class="form-control" id="exampleInputPassword1" value="<?= $akta_kelahiran->tgl_dibuat ?>" placeholder="Masukkan Tanggal Dibuat" readonly>
                  </div>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $akta_kelahiran->updated_by) {?>
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