<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pindah_domisili_function.php';
  $data = new pindah_domisili(); 
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Domisili</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Domisili</a></li>
              <li class="breadcrumb-item active">Tambah Domisili</li>
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
                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Tujuan Pindah</label>
                    <input type="text" name="alamat_tujuan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alasan</label>
                    <input type="text" name="alasan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alasan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Surat RT</label>
                    <input type="file" name="surat_rt" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Surat Capil</label>
                    <input type="file" name="surat_capil" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fotocopy KTP</label>
                    <input type="file" name="berkas_ktp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fotocopy KK</label>
                    <input type="file" name="berkas_kk" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Surat Domisili Sekarang</label>
                    <input type="file" name="surat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="0" placeholder="Masukkan Agenda">
                 
                
              
                 
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