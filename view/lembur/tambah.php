<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/lembur_function.php';
  $data = new lembur(); 
?>

<script>

      function sum() {
			var jam_awal = document.getElementById('jam_awal').value;
      var jam_akhir = document.getElementById('jam_akhir').value;
      var jam = diff_hours($jam_awal, $jam_akhir)
 
			var hourDifference = selisih  / 1000 / 3600;
			document.getElementById('jumlah_jam').value = jam;
			
				
					}

     
</script>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Lembur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data lembur</a></li>
              <li class="breadcrumb-item active">Tambah lembur</li>
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
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php
                        foreach($data->pegawai() as $p):
                         
                      ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php  endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Awal</label>
                    <input type="time" name="jam_awal" id="jam_awal" class="form-control" onkeyup="sum();"  id="exampleInputEmail1" placeholder="Masukkan Gaji">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam_akhir</label>
                    <input type="time" name="jam_akhir" id="jam_akhir" class="form-control" onkeyup="sum();"  id="exampleInputPassword1" placeholder="Masukkan Tunjangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Jam</label>
                    <input type="text" name="jumlah_jam" id="jumlah_jam" class="form-control" onkeyup="sum();"  id="exampleInputPassword1" placeholder="Masukkan Total">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" name="total" id="total" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan">
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