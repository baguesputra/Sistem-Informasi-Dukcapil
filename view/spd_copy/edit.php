<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/spd_function.php';
  $data = new spd(); 
  $id = $_GET['id'];
  $spd = $data->edit($id);
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
              <li class="breadcrumb-item"><a href="index.php">Data SPPD</a></li>
              <li class="breadcrumb-item active">Edit SPPD</li>
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
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" value="<?= $spd->tgl ?>" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputPassword1" value="<?= $spd->tujuan ?>" placeholder="Masukkan Tujuan">
                    <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" value="<?= $spd->id ?>" placeholder="Masukkan Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputPassword1" value="<?= $spd->kota ?>" placeholder="Masukkan Kota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pegawai</label>
                    <select name="pegawai" id="pegawai" class="form-control">
                      <?php
                        foreach($data->pegawai() as $p):
                          if($p['id'] == $spd->pegawai){
                      ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <input type="hidden" name="ver" class="form-control" id="exampleInputPassword1" value="<?= $spd->ver?>" placeholder="Masukkan Agenda">
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