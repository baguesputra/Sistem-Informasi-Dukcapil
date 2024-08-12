<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/surat_tugas_function.php';
  $data = new surat_tugas(); 
  $id = $_GET['id'];
  $surat_tugas = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit SPPD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Surat Perintah Tugas</a></li>
              <li class="breadcrumb-item active">Edit Surat Perintah Tugas</li>
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
              <form id="quickForm" action="proses.php" method="post">
              <div class="card-body">
              <input type="text" name="id" class="form-control" value="<?= $surat_tugas->id ?>" id="exampleInputEmail1" placeholder="Masukkan Gaji" hidden>
              <div class="form-group">
                    <label for="exampleInputEmail1">Atas Perintah</label>
                    <select name="perintah" id="perintah" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $surat_tugas->id_pegawai){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $surat_tugas->id_pegawai){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->tujuan ?>" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Awal</label>
                    <input type="date" name="tanggal_awal" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->tanggal_awal ?>" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal akhir</label>
                    <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->tanggal_akhir ?>" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rangka</label>
                    <input type="text" name="rangka" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->rangka ?>" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Transportasi</label>
                    <select name="transportasi" id="transportasi" class="form-control">
                      <option value="<?= $surat_tugas->transportasi ?>" selected hidden><?= $surat_tugas->transportasi ?></option>
                      <option value="Kendaraan Dinas">Kendaraan Dinas</option>
                      <option value="Kendaraan Umum">Kendaraan Umum</option>
                      <option value="Travel">Pesawat Udara</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pembiayaan</label>
                    <input type="text" name="pembiayaan" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->pembiayaan ?>" placeholder="Masukkan Pembiayaan">
                  </div>
                  
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->status ?>" placeholder="Masukkan Agenda">
                </div>
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