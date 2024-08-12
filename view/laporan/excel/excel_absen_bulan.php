<?php 
  include '../../../function/absen_function.php';
  $data = new absen(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2']; 
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Rekap-Absen-$bulan1.xls");
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
                    <th width="215px" align="center">Hadir</th>
                    <th width="215px" align="center">Sakit</th>
                    <th width="215px" align="center">Alpha</th>
                    <th width="215px" align="center">Izin</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $hadir = 0;
                    $sakit = 0;
                    $alpha = 0;
                    $sakit = 0;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT *  FROM pegawai "); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id'];
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nama']; ?></td>
                       
                        <?php 
                         $jumlah_hadir=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='HADIR' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         while($d2 = mysqli_fetch_array($jumlah_hadir)){
                         ?>
                          <?php if($d['id'] == $d2['id_pegawai']){  ?>
                          <?php $hadir = mysqli_num_rows($jumlah_hadir) ?>
                        <?php }} ?>
                        <td><?= $hadir ?></td> 

                        <?php 
                         $jumlah_sakit=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='SAKIT' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         while($d3 = mysqli_fetch_array($jumlah_sakit)){
                         ?>
                          <?php if($d['id'] == $d3['id_pegawai']){  ?>
                          <?php $sakit = mysqli_num_rows($jumlah_sakit) ?>
                        <?php }} ?>
                        <td><?= $sakit ?></td> 

                        <?php 
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         while($d4 = mysqli_fetch_array($jumlah_alpha)){
                         ?>
                          <?php if($d['id'] == $d4['id_pegawai']){  ?>
                          <?php $alpha = mysqli_num_rows($jumlah_alpha) ?>
                        <?php }} ?>
                        <td><?= $alpha ?></td> 


                        <?php 
                         $jumlah_izin=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='IZIN' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         while($d5 = mysqli_fetch_array($jumlah_izin)){
                         ?>
                          <?php if($d['id'] == $d5['id_pegawai']){  ?>
                          <?php $izin = mysqli_num_rows($jumlah_izin) ?>
                        <?php }} ?>
                        <td><?= $izin ?></td> 
                     
                      
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