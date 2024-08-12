<?php 
  include '../../../function/gajih_function.php';
  $data = new gajih(); 
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Gajih.xls");
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
                      <th width="215px" align="center">Gaji</th>
                      <th width="215px" align="center">Tunjangan</th>
                      <th width="215px" align="center">Alpha</th>
                      <th width="215px" align="center">Telat</th>
                      <th width="215px" align="center">Lembur</th>
                      <th width="215px" align="center">Total</th>
                      <th width="215px" align="center">Keterangan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT gajih.id, gajih.total, gajih.tunjangan, gajih.gaji, gajih.ket,gajih.id_pegawai, pegawai.nama FROM gajih join pegawai on gajih.id_pegawai = pegawai.id"); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id_pegawai'];
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td>Rp. <?= number_format($d['gaji'], 0, ',', '.') ?></td>
                          <td>Rp. <?= number_format($d['tunjangan'], 0, ',', '.') ?></td>
                          <?php 
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $alpha = mysqli_num_rows($jumlah_alpha) ;
                         ?>
                         
                        <td><?= $alpha ?></td> 

                        <?php
                         $jumlah_telat=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='TELAT' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $telat = mysqli_num_rows($jumlah_telat);
                         ?>
                         
                        
                        <td><?= $telat ?></td>

                        <?php
                        
                         $jumlah_lembur=mysqli_query($conn,"SELECT sum(total) as total FROM lembur WHERE id_pegawai=$id_pegawai  and lembur.tanggal BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                        
                         while( $lembur = mysqli_fetch_array($jumlah_lembur)){
                          $lembur_total = $lembur['total']
                         ?>

                        <td><?= $lembur['total'] ?></td> 
                        <?php } ?>

                        <?php $total = ($d['total'] - ($alpha * 100000) - ($telat * 10000)) + $lembur_total; ?>
                          <td>Rp. <?= number_format($total, 0, ',', '.') ?></td>
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