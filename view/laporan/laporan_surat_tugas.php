<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/cuti_function.php';
  $data = new cuti(); 
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Cuti</h1>
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
              <form id="quickForm" name="form" action="pdf/pdf_surat_tugas.php" method="GET">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Awal</label>
                    <input type="date" name="tgl1" class="form-control" id="exampleInputPassword1" style="width:200px;" placeholder="Masukkan No Surat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Akhir</label>
                    <input type="date" name="tgl2" class="form-control" id="exampleInputPassword1" value="<?php echo date('Y-m-d', strtotime($sampai_tanggal));?>" style="width:200px;" placeholder="Masukkan Jenis Kelamin">
                  </div>
                </div>
                <div class="card-footer">
                  <input type='submit' class="btn btn-danger" value='Pdf' onclick="this.form.target='_blank'; return true;">
                  <input type='submit' class="btn btn-success" value='Excel' onclick="form.action='excel/excel_surat_tugas.php';  return true;">
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