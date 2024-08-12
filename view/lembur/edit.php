<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/lembur_function.php';
  $data = new lembur(); 
  $id = $_GET['id'];
  $lembur = $data->edit($id);
?>
<script>

function sum() {
var gaji = document.getElementById('gaji').value;
var tunjangan = document.getElementById('tunjangan').value;
var sum = parseInt(gaji) + parseInt(tunjangan) ;

  if (!isNaN(sum)) {
    document.getElementById('total').value = sum;

  }
    }


</script>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Lembur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Lembur</a></li>
              <li class="breadcrumb-item active">Edit Lembur</li>
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
              <form action="proses.php" method="post">
              <div class="card-body">
              <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $lembur->id_pegawai){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" id="exampleInputEmail1" value="<?= $lembur->tanggal ?>" placeholder="Masukkan Tanggal">
                    <input type="id" hidden name="id" id="id" class="form-control" id="exampleInputEmail1" value="<?= $lembur->id ?>" placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Awal</label>
                    <input type="time" name="jam_awal" id="jam_awal" class="form-control" onkeyup="sum();" value="<?= $lembur->jam_awal ?>"  id="exampleInputEmail1" placeholder="Masukkan Gaji">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam_akhir</label>
                    <input type="time" name="jam_akhir" id="jam_akhir" class="form-control" onkeyup="sum();" value="<?= $lembur->jam_akhir ?>"  id="exampleInputPassword1" placeholder="Masukkan Tunjangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Jam</label>
                    <input type="text" name="jumlah_jam" id="jumlah_jam" class="form-control" onkeyup="sum();" value="<?= $lembur->jumlah_jam ?>"  id="exampleInputPassword1" placeholder="Masukkan Total">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" name="total" id="total" class="form-control" id="exampleInputEmail1" value="<?= $lembur->total ?>" placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $lembur->ket ?>" placeholder="Masukkan Keterangan">
                  </div>
            
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