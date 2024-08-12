<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jabatan_function.php';
  $data = new jabatan(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Jabatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Jabatan</a></li>
              <li class="breadcrumb-item active">Tambah Jabatan</li>
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
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="nik" name="jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nip">
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