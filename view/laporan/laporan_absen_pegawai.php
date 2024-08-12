<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/absen_function.php';
  $data = new absen(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1>Laporan Absen Pegawai</h1>
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
              <form id="quickForm" name="form" action="pdf/pdf_absen_pegawai.php" method="GET">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->pegawai() as $p): {?>
                      <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                
                </div>
                <div class="card-footer">
                  <input type='submit' class="btn btn-danger" value='Pdf' onclick="this.form.target='_blank'; return true;">
                  <input type='submit' class="btn btn-success" value='Excel' onclick="form.action='excel/excel_absen_pegawai.php';  return true;">
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