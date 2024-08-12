<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/cuti_function.php';
  $data = new cuti(); 
  $id = $_GET['id'];
  $cuti = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Cuti</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Cuti</a></li>
              <li class="breadcrumb-item active">Edit Cuti</li>
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
              <input type="text" name="id" class="form-control" value="<?= $cuti->id ?>" id="exampleInputEmail1" placeholder="Masukkan Gaji" hidden>
              <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $gajih->pegawai){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Awal</label>
                    <input type="date" name="tanggal_awal" class="form-control" value="<?= $cuti->tanggal_awal ?>" id="exampleInputPassword1" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Akhir</label>
                    <input type="date" name="tanggal_akhir" class="form-control" value="<?= $cuti->tanggal_akhir ?>" id="exampleInputPassword1" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keperluan</label>
                    <input type="text" name="keperluan" class="form-control" value="<?= $cuti->keperluan ?>" id="exampleInputPassword1" placeholder="Masukkan Keperluan">
                  </div>
                  
                  <input type="text" name="status" class="form-control" id="exampleInputPassword1" value="<?= $cuti->status ?>" placeholder="Masukkan Agenda" hidden>
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