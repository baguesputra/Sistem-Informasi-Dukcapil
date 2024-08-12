<?php 
  include '../../../function/pencapaian_function.php';
  $data = new pencapaian(); 
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Pencapaian.xls");
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
                      <th width="215px" align="center">Tanggal</th>
                      <th width="215px" align="center">Nip</th>
                      <th width="215px" align="center">Nama</th>
                      <th width="215px" align="center">Jabatan</th>
                      <th width="215px" align="center">Pencapaian</th>
                      <th width="215px" align="center">Foto</th>
                      <th width="215px" align="center">Keterangan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT pegawai.id as pegawai_id, pencapaian.id, pencapaian.id_pegawai, pencapaian.tgl, pencapaian.tempat,pencapaian.capaian, pencapaian.foto, pencapaian.ket, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket as keterangan FROM pencapaian join pegawai on pencapaian.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on pegawai.golongan = golongan.id WHERE tgl BETWEEN '".$tglawal."' AND '".$tglakhir."'"); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id_pegawai'];
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= tgl_indo(date($d['tgl'])); ?></td>
                          <td><?= $d['nik']; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['jabatan']; ?></td>
                          <td><?= $d['capaian']; ?></td>
                          <td align="center"><img src="../../../Arsip/pencapaian/<?= $d['foto']; ?>" width="80" height="80" alt=""></td>
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