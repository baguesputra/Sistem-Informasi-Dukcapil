<?php 
  include '../../../function/surat_tugas_function.php';
  $data = new surat_tugas(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2']; 
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Surat-Tugas-$bulan1.xls");
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
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Tujuan</th>
                    <th>Rangka</th>
                    <th>Transportasi</th>
                    <th>Pembiayaan</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT surat_tugas.id, surat_tugas.id_pegawai, surat_tugas.tanggal_awal, surat_tugas.tanggal_akhir, surat_tugas.status, surat_tugas.rangka,surat_tugas.tujuan, surat_tugas.transportasi, surat_tugas.pembiayaan,pegawai.nama FROM surat_tugas join pegawai on surat_tugas.id_pegawai = pegawai.id WHERE tanggal_awal BETWEEN '".$tglawal."' AND '".$tglakhir."' "); 
                    while($surat_tugas = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                  <td><?= $no++; ?></td>
                        <td><?= $surat_tugas['nama']; ?></td>
                        <td><?= $surat_tugas['tanggal_awal']; ?> sampai <?= $surat_tugas['tanggal_akhir']; ?></td>
                        <td><?= $surat_tugas['tujuan']; ?></td>
                        <td><?= $surat_tugas['rangka']; ?></td>
                        <td><?= $surat_tugas['transportasi']; ?></td>
                        <td><?= $surat_tugas['pembiayaan']; ?></td>
                        <?php if($surat_tugas['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true">Belum Approve</i></td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true">Approve</i></td>
                        <?php }?>
                     
                      
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