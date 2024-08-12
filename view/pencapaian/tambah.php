<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pencapaian_function.php';
  $data = new pencapaian(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pencapaian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Pencapaian</a></li>
              <li class="breadcrumb-item active">Tambah Pencapaian</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form id="quickForm" action="proses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->pegawai() as $p): {?>
                        <?php if($p['id'] == $_SESSION['id_pegawai'] ){ ?>
                      <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                      <?php } elseif($_SESSION['level']== 'admin') { ?>
                        <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php } ?>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Pencapaian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pencapaian</label>
                    <input type="text" name="capaian" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Pencapaian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Pencapaian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Foto</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan">
                  </div>
                 
                 
                </div>
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