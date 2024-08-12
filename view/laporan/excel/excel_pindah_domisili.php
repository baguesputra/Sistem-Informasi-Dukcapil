<?php 
  include '../../../function/pindah_domisili_function.php';
  $data = new pindah_domisili(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2']; 
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Pindah-Domisili-$bulan1.xls");
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
                  <th width="10px" align="center">No</th>
                  <th>Nik</th>
                    <th>Nama</th>
                    <th>Tanggal </th>
                    <th>Alamat Tujuan Pindah</th>
                    <th>Alasan</th>
                    <th>Verifikasi</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT pindah_domisili.id, pindah_domisili.alasan, pindah_domisili.alamat_tujuan,pindah_domisili.tanggal, penduduk.no_penduduk, penduduk.nama, pindah_domisili.status FROM pindah_domisili join penduduk on pindah_domisili.id_penduduk = penduduk.id WHERE pindah_domisili.tanggal BETWEEN '".$tglawal."' AND '".$tglakhir."' order by pindah_domisili.status desc"); 
                    while($pindah_domisili = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                   <td><?= $no++ ?></td>
                  <td><?= $pindah_domisili['no_penduduk']; ?></td>

                        <td><?= $pindah_domisili['nama']; ?></td>
                        <td><?=  $pindah_domisili['tanggal'] ?></td>
                        <td><?= $pindah_domisili['alamat_tujuan']; ?></td>
                        <td><?= $pindah_domisili['alasan']; ?></td>
                        <?php if($pindah_domisili['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i>Belum Disetujui</td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i>Disetujui</td>
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