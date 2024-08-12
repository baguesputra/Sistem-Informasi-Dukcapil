<?php 
  include '../../../function/pegawai_function.php';
  $data = new pegawai(); 
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Pegawai.xls");
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
                <table id="example1" class="table table-bordered table-striped" border="1">
                  <thead>
                  <tr>
                      <th width="215px" align="center">No</th>
                      <th width="215px" align="center">Nama</th>
                      <th width="215px" align="center">Tanggal Lahir</th>
                      <th width="215px" align="center">Agama</th>
                      <th width="215px" align="center">Jenis Kelamin</th>
                      <th width="215px" align="center">Alamat</th>
                      <th width="215px" align="center">Email</th>
                      <th width="215px" align="center">Jabatan</th>
                      <th width="215px" align="center">No</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM pegawai "); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['tgl_lahir']; ?></td>
                          <td><?= $d['agama']; ?></td>
                          <td><?= $d['jk']; ?></td>
                          <td><?= $d['alamat']; ?></td>
                          <td><?= $d['email']; ?></td>
                          <td><?= $d['jabatan']; ?></td>
                          <td><?= $d['no']; ?></td>
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