<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/golongan_function.php';
  $data = new golongan(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Golongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Golongan</a></li>
              <li class="breadcrumb-item active">Tambah Golongan</li>
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
              <form id="quickForm" action="proses.php" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">golongan</label>
                    <input type="nik" name="golongan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Golongan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tingkat</label>
                    <input type="nik" name="tingkat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tingkat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="nama" name="ket" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap">
                  </div>
                
                 
                 
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