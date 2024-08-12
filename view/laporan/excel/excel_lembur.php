<?php 
  include '../../../function/lembur_function.php';
  $data = new lembur(); 
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Lembur.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: max-age=0");
        header("Cache-Control: private",false); 
    ?> 
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
              <table class="static" rules="all" border="1px" align="center">
                  <thead>
                    <tr>
                      <th width="215px" align="center">No</th>
                      <th width="215px" align="center">Nama</th>
                      <th width="215px" align="center">Tanggal</th>
                      <th width="215px" align="center">Jam Mulai</th>
                      <th width="215px" align="center">Jam Akhir</th>
                      <th width="215px" align="center">Total Jam</th>
                      <th width="215px" align="center">Uang Lembur</th>
                      <th width="215px" align="center">Keterangan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM lembur join pegawai on lembur.id_pegawai = pegawai.id"); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id_pegawai'];
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['tanggal']; ?></td>
                          <td><?= $d['jam_awal']; ?></td>
                          <td><?= $d['jam_akhir']; ?></td>
                          <td><?= $d['jumlah_jam']; ?></td>
                          <td><?= $d['total']; ?></td>
                          <td><?= $d['ket']; ?></td>
                       
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>