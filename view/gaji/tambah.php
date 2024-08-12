<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/gajih_function.php';
  $data = new gajih(); 
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
            <h1>Tambah gaji</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data gaji</a></li>
              <li class="breadcrumb-item active">Tambah gaji</li>
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
                    <label for="exampleInputEmail1">Gaji</label>
                    <input type="text" name="gaji" id="gaji" class="form-control" onkeyup="sum();" value="0" id="exampleInputEmail1" placeholder="Masukkan Gaji">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tunjangan</label>
                    <input type="text" name="tunjangan" id="tunjangan" class="form-control" onkeyup="sum();" value="0" id="exampleInputPassword1" placeholder="Masukkan Tunjangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" name="total" id="total" class="form-control" onkeyup="sum();" value="0" id="exampleInputPassword1" placeholder="Masukkan Total">
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