<?php $page = "akta_kelahiran";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_kelahiran_function.php';
  $data = new akta_kelahiran(); 
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
            <h1>Data Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Akta Kelahiran</li>
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
        <h4 class="modal-title">Persyaratan Pembuatan Akta Kelahiran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p>1. Surat keterangan lahir dari dokter/bidan/penolong kelahiran</p>
                <p>2. Fotokopi Akta Nikah/Kutipan Akta Perkawinan orangtua (dilegalisir)</p>
                <p>3. Fotokopi KK dan KTP-el orangtua</p>
                <p>4. Fotokopi KTP-el 2 (dua) orang saksi</p>
                <p>5. Pencatatan kelahiran tidak dipungut biaya</p>
                <p>6. Surat kuasa di atas materai cukup bagi yang dikuasakan, dilampiri fotokopi KTP-el penerima kuasa</p>
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
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Akta</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $akta_kelahiran)
                     if ($akta_kelahiran['ayah'] == $_SESSION['id_penduduk'] or $akta_kelahiran['ibu'] == $_SESSION['id_penduduk']) {
                  ?>
                  <tr>
                  <td><?= $no++ ?></td>
                        <td><?= $akta_kelahiran['no_akta']; ?></td>
                        <td><?= $akta_kelahiran['nama']; ?></td>
                        <td><?= $akta_kelahiran['tgl_lahir']; ?></td>
                        <td><?= $akta_kelahiran['tgl_dibuat']; ?></td>
                        <td align="center">
                          <?php 
                            if($akta_kelahiran['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <a href="../../Arsip/surat_akta/<?=$akta_kelahiran['surat_akta'] ?>" target="_top" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <a href="detail.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                        </td>
                      
                  </tr>
                <?php } elseif($_SESSION['id_penduduk'] == 0) {?>
                  <tr>
                  <td><?= $no++ ?></td>
                   <td><?= $akta_kelahiran['no_akta']; ?></td>
                   <td><?= $akta_kelahiran['nama']; ?></td>
                   <td><?= $akta_kelahiran['tgl_lahir']; ?></td>
                   <td><?= $akta_kelahiran['tgl_dibuat']; ?></td>
                   <td align="center">
                          <?php 
                            if($akta_kelahiran['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <?php if ($akta_kelahiran['surat_akta'] == null) {?>
                          
                            <a href="upload.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-primary ">Upload</a>
                            <?php } else { ?>
                              <a href="../../Arsip/surat_akta/<?=$akta_kelahiran['surat_akta'] ?>" target="_top" class="btn btn-primary fa fa-file"></a>
                            <?php } ?>
                          <?php } ?>
                          <a href="detail.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_kelahiran['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                        </td>
                 
             </tr>
             <?php }?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>