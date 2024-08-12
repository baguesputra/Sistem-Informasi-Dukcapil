<?php $page = "akta_keluarga";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/akta_keluarga_function.php';
  $data = new akta_keluarga(); 
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
            <h1>Data Akta Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Akta Keluarga</li>
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
        <h4 class="modal-title">Persyaratan Pembuatan Akta Keluarga</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p>1. FORMULIR F-101,</p>
                <p>2. KTP ORANGTUA & KARTU KELUARGA</p>
                <p>3. SURAT LAHIR DARI BIDAN/RUMAH SAKIT,</p>
                <p>4. BUKU NIKAH</p>
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
                    <th>No KK</th>
                    <th>Alamat</th>
                    <th>Kepala Keluarga</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $akta_keluarga)
                     if ($akta_keluarga['kepala_keluarga'] == $_SESSION['id_penduduk']){
                  ?>
                  <tr>
                  <td><?= $no++ ?></td>
                        <td><?= $akta_keluarga['no_kk']; ?></td>
                        <td><?= $akta_keluarga['alamat']; ?></td>
                        <td><?= $akta_keluarga['kepala_keluarga']; ?></td>
                        <td><?= $akta_keluarga['tgl_dibuat']; ?></td>
                        <td align="center">
                          <?php 
                            if($akta_keluarga['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <a href="detail.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php }} else { ?>
                            <?php if ($akta_keluarga['surat_akta'] == null) {?>
                              <a href="detail.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                          <?php } else { ?>
                            <a href="../../Arsip/surat_akta/<?=$akta_keluarga['surat_akta'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <?php } ?>
                          
                          
                        </td>
                      
                  </tr>
                <?php } elseif($_SESSION['id_penduduk'] == '0') { ?>
                  <tr>
                  <td><?= $no++ ?></td>
                   <td><?= $akta_keluarga['no_kk']; ?></td>
                   <td><?= $akta_keluarga['alamat']; ?></td>
                   <td><?= $akta_keluarga['kepala_keluarga']; ?></td>
                   <td><?= $akta_keluarga['tgl_dibuat']; ?></td>
                   <td align="center">
                          <?php 
                            if($akta_keluarga['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <a href="detail.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php }} else { ?>
                            <?php if ($akta_keluarga['surat_akta'] == null) {?>
                          
                          <a href="upload.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-primary ">Upload</a>
                          <a href="detail.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php } else { ?>
                            <a href="../../Arsip/surat_akta/<?=$akta_keluarga['surat_akta'] ?>" class="btn btn-primary fa fa-file"></a>
                            <a href="detail.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$akta_keluarga['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php } ?>
                          <?php } ?>
                          
                          
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