<?php 
  include '../../../function/akta_kelahiran_function.php';
  $data = new akta_kelahiran(); 
?>
<?php 
        $bulan1 =date('F', strtotime($tglawal));
        $bulan2 =date('F', strtotime($tglakhir));
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Akta-Kelahiran.xls");
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
                      <th width="215px" align="center">Nama</th>
                      <th width="215px" align="center">Jenis Kelamin</th>
                      <th width="215px" align="center">Tanggal Lahir</th>
                      <th width="215px" align="center">Tanggal Dibuat</th>
                      <th width="215px" align="center">Tempat</th>
                      <th width="215px" align="center">Status</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM akta_kelahiran"); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['no_akta']; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['jk']; ?></td>
                          <td><?= $d['tgl_lahir']; ?></td>
                          <td><?= $d['tgl_dibuat']; ?></td>
                          <td><?= $d['tempat']; ?></td>
                          <?php if($d['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i>Menunggu Approve</td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i>Approve</td>
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