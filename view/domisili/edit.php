<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/domisili_function.php';
  $data = new domisili(); 
  $id = $_GET['id'];
  $domisili = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Surat Keterangan Domisili</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Surat Keterangan Domisili</a></li>
              <li class="breadcrumb-item active">Edit Surat Keterangan Domisili</li>
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
                    <label for="exampleInputEmail1">No Kependudukan</label>
                    <select name="id_penduduk" id="id_penduduk" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->penduduk() as $penduduk): {?>
                        <?php if ($penduduk['id']==$_SESSION['id_penduduk']){ ?>
                      <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?> - <?= $penduduk['no_penduduk']; ?></option>
                      <?php } else { ?>
                        <option value="<?= $penduduk['id']; ?>"><?= $penduduk['nama']; ?> - <?= $penduduk['no_penduduk']; ?></option>
                      <?php }} endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" value="<?= $domisili->tanggal ?>" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $domisili->status ?>" placeholder="Masukkan Agenda">
                  
                
                
              
                 
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