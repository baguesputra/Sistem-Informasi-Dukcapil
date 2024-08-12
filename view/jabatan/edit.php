<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jabatan_function.php';
  $data = new jabatan(); 
  $id = $_GET['id'];
  $jabatan = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Jabatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Jabatan</a></li>
              <li class="breadcrumb-item active">Edit Jabatan</li>
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
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" value="<?= $jabatan->jabatan ?>" placeholder="Masukkan Jabatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="nama" name="ket" class="form-control" id="exampleInputEmail1" value="<?= $jabatan->ket ?>" placeholder="Masukkan Keterangan">
                    <input type="nama" name="id" class="form-control" id="exampleInputEmail1" value="<?= $jabatan->id ?>" hidden>
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