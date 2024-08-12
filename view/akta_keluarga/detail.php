<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_keluarga_function.php';
  $data = new akta_keluarga(); 
  $id = $_GET['id'];
  $akta_keluarga = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lihat Akta Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Akta Keluarga</a></li>
              <li class="breadcrumb-item active">Lihat Akta Keluarga</li>
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
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?= $akta_keluarga->id ?>" placeholder="Masukkan No KK" hidden>
                    <label for="exampleInputEmail1">No KK</label>
                    <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" value="<?= $akta_keluarga->no_kk ?>" placeholder="Masukkan No KK" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $akta_keluarga->alamat ?>" placeholder="Masukkan Alamat" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">kepala_keluarga</label>
                    <select name="kepala_keluarga" id="kepala_keluarga" class="form-control" readonly>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if($penduduk['id'] == $akta_keluarga->kepala_keluarga){?>
                        <option value="<?= $akta_keluarga->kepala_keluarga ?>" selected hidden><?= $penduduk['nama'] ?></option>
                        <?php } ?>
                      <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" name="tgl_dibuat" class="form-control" id="exampleInputPassword1" value="<?= $akta_keluarga->tgl_dibuat ?>" placeholder="Masukkan Tanggal Dibuat" readonly>
                  </div>
                  <?php foreach ($data->penduduk() as $penduduk) {?>
                        <?php if($penduduk['id'] == $akta_keluarga->updated_by) {?>
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