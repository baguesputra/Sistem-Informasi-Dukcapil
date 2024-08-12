<?php 
  include '../../../function/perubahan_akta_perkawinan_function.php';
  $data = new perubahan_akta_perkawinan();  
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Peurbahan-Akta-Perkawinan.xls");
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
                      <th width="215px" align="center">No Akta</th>
                      <th width="215px" align="center">Tanggal Pengajuan</th>
                      <th width="215px" align="center">Tanggal Pengubahan</th>
                      <th width="215px" align="center">Perubahan</th>
                      <th width="215px" align="center">Alasan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM perubahan_akta_perkawinan"); 
                    foreach($data as $d):{
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <?php 
                          $data=mysqli_query($conn,"SELECT * FROM akta_perkawinan"); 
                          while($akta_perkawinan = mysqli_fetch_array($data)){?>
                          <?php if ($akta_perkawinan['id']== $d['no_akta']){ ?>
                          <td><?= $akta_perkawinan['no']; ?></td>
                          <?php } ?>
                          <?php } ?>
                          <td><?= $d['tgl_pengajuan']; ?></td>
                          <td><?= $d['tgl_pengubahan']; ?></td>
                          <td><?= $d['perubahan']; ?></td>
                          <td><?= $d['alasan']; ?></td>
                    </tr>
                  <?php } endforeach ?>
                </table>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>