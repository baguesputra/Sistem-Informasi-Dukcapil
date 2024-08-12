<?php 
  include '../../../function/akta_keluarga_function.php';
  $data = new akta_keluarga();  
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Akta-Perkawinan.xls");
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
                      <th width="215px" align="center">No</th>
                      <th width="215px" align="center">Nama Pria</th>
                      <th width="215px" align="center">Nama Wanita</th>
                      <th width="215px" align="center">Tanggal Nikah</th>
                      <th width="215px" align="center">Tempat Nikah</th>
                      <th width="215px" align="center">Tanggal Dibuat</th>
                      <th width="215px" align="center">Status</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM akta_perkawinan"); 
                    foreach($data as $d): {
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['no']; ?></td>
                          <?php 
                          $data=mysqli_query($conn,"SELECT * FROM penduduk"); 
                          while($penduduk = mysqli_fetch_array($data)){?>
                          <?php if ($penduduk['id']== $d['nama_pria']){ ?>
                          <td><?= $penduduk['nama']; ?></td>
                          <?php } ?>
                          <?php if ($penduduk['id']== $d['nama_wanita']){ ?>
                          <td><?= $penduduk['nama']; ?></td>
                          <?php } ?>
                          <?php } ?>
                          <td><?= $d['tgl_nikah']; ?></td>
                          <td><?= $d['tempat_nikah']; ?></td>
                          <td><?= $d['tgl_dibuat']; ?></td>
                          <?php if($d['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i>Menunggu Approve</td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i>Approve</td>
                        <?php }?>
                    </tr>
                  <?php } endforeach ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>