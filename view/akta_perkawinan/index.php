<?php $page = "akta_perkawinan";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_perkawinan_function.php';
  $data = new akta_perkawinan(); 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('table').DataTable({
   
    lengthMenu: [[10, 50, 100], [10, 50, 100]]
});
} );
</script> 

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Akta Perkawinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Akta Perkawinan</li>
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
                <h3 class="card-title">
                    <a href="tambah.php" class="btn btn-success">Tambah</a>


                                  <!-- Button to Open the Modal -->
                                  <button align="right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Persyaratan
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Persyaratan Pembuatan Akta Perkawinan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p>1. KK asli suami dan istri</p>
                <p>2. Surat Keterangan Domisili dari Kelurahan</p>
                <p>3. Surat Keterangan Perkawinan dari Pemuka Agama /Salinan Penetapan Pengadilan Pemohon</p>
                <p>4. Fotokopi KTP-El Suami dan Istri (asli)</p>
                <p>5. Pas Foto Suami Istri berdampingan ukuran 4×6, 5 lembar</p>
                <p>6. Fotokopi kutipan akta kelahiran suami dan istri</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

                </h3>
              </div>
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Akta</th>
                    <th>Nama Pria</th>
                    <th>Nama Wanita</th>
                    <th>Tanggal Nikah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $akta_perkawinan)
                     if ($akta_perkawinan['nama_pria'] == $_SESSION['id_penduduk'] or $akta_perkawinan['nama_wanita'] == $_SESSION['id_penduduk']) {
                  ?>
                  <tr>
                  <td><?= $no++ ?></td>
                        <td><?= $akta_perkawinan['no']; ?></td>
                        <?php foreach ($data->penduduk() as $penduduk): {?>
                          <?php if($penduduk['id'] == $akta_perkawinan['nama_pria'] ) {?>
                        <td><?= $penduduk['nama']; ?></td>
                        <?php } ?>
                        <?php if($penduduk['id'] == $akta_perkawinan['nama_wanita'] ) {?>
                        <td><?= $penduduk['nama']; ?></td>
                        <?php } ?>
                        <?php } endforeach ?>
                        <td><?= $akta_perkawinan['tgl_nikah']; ?></td>
                        <td align="center">
                          <?php 
                            if($akta_perkawinan['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <?php if ($akta_perkawinan['surat_akta'] == null) {?>
                          
                          
                          <?php } else { ?>
                            <a href="../../Arsip/surat_akta/<?=$akta_perkawinan['surat_akta'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <?php } ?>
                          <a href="detail.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                        </td>
                      
                  </tr>
                <?php } elseif($_SESSION['id_penduduk'] == '0') { ?>
                  <tr>
                  <td><?= $no++ ?></td>
                   <td><?= $akta_perkawinan['no']; ?></td>
                   <?php foreach ($data->penduduk() as $penduduk): {?>
                     <?php if($penduduk['id'] == $akta_perkawinan['nama_pria'] ) {?>
                   <td><?= $penduduk['nama']; ?></td>
                   <?php } ?>
                   <?php if($penduduk['id'] == $akta_perkawinan['nama_wanita'] ) {?>
                   <td><?= $penduduk['nama']; ?></td>
                   <?php } ?>
                   <?php } endforeach ?>
                   <td><?= $akta_perkawinan['tgl_nikah']; ?></td>
                   <td align="center">
                          <?php 
                            if($akta_perkawinan['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <?php if ($akta_perkawinan['surat_akta'] == null) {?>
                          
                          <a href="upload.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-primary ">Upload</a>
                          <?php } else { ?>
                            <a href="../../Arsip/surat_akta/<?=$akta_perkawinan['surat_akta'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <?php } ?>
                          <a href="detail.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_perkawinan['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                        </td>
                      
                 
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