<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/golongan_function.php';
  $data = new golongan(); 
  $id = $_GET['id'];
  $golongan = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Golongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Golongan</a></li>
              <li class="breadcrumb-item active">Edit Golongan</li>
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
              <form action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Golongan</label>
                    <input type="text" name="golongan" class="form-control" id="exampleInputPassword1" value="<?= $golongan->golongan ?>" placeholder="Masukkan Golongan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tingkat</label>
                    <input type="text" name="tingkat" class="form-control" id="exampleInputPassword1" value="<?= $golongan->tingkat ?>" placeholder="Masukkan Tingkat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="nama" name="ket" class="form-control" id="exampleInputEmail1" value="<?= $golongan->ket ?>" placeholder="Masukkan Keterangan">
                    <input type="nama" name="id" class="form-control" id="exampleInputEmail1" value="<?= $golongan->id ?>" hidden>
                  </div>
                 
                
                 
                </div>
                <!-- /.card-body -->
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