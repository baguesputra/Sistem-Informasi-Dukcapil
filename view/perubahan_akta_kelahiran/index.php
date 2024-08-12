<?php $page = "akta_kelahiran";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/perubahan_akta_kelahiran_function.php';
  $data = new perubahan_akta_kelahiran(); 
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
            <h1>Data Perubahan Akta Kelahiran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Perubahan Akta Kelahiran</li>
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
                </h3>
              </div>
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Akta</th>
                    <th>Tanggal Perubahan</th>
                    <th>Perubahan</th>
                    <th>Akta Awal</th>
                    <th>Akta Perubahan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $perubahan_akta_kelahiran)
                     if ($perubahan_akta_kelahiran['ayah'] == $_SESSION['id_penduduk'] or $perubahan_akta_kelahiran['ibu'] == $_SESSION['id_penduduk']){
                  ?>
                  <tr>
                   
                  <td><?= $no++ ?></td>
                        <td><?= $perubahan_akta_kelahiran['no_akta']; ?> - <?= $perubahan_akta_kelahiran['nama']; ?></td>
                       
                        <td><?= $perubahan_akta_kelahiran['tgl_pengubahan']; ?></td>
                        <td><?= $perubahan_akta_kelahiran['perubahan']; ?></td>
                        <td><a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran['akta_awal'] ?>"><?= $perubahan_akta_kelahiran['akta_awal'] ?></a></td>
                        <td><a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran['akta_perubahan'] ?>"><?= $perubahan_akta_kelahiran['akta_perubahan'] ?></a></td>
                        <td align="center">
                          <?php 
                            if($perubahan_akta_kelahiran['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <a href="cetak.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <a href="detail.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
                        </td>
                      
                      
                  </tr>
                <?php } elseif($_SESSION['id_penduduk'] == '0') { ?>
                  <tr>
                   
                  <td><?= $no++ ?></td>
                   <td><?= $perubahan_akta_kelahiran['no_akta']; ?> - <?= $perubahan_akta_kelahiran['nama']; ?></td>
                  
                   <td><?= $perubahan_akta_kelahiran['tgl_pengubahan']; ?></td>
                   <td><?= $perubahan_akta_kelahiran['perubahan']; ?></td>
                   <td><a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran['akta_awal'] ?>"><?= $perubahan_akta_kelahiran['akta_awal'] ?></a></td>
                   <td><a href="../../arsip/perubahan akta kelahiran/<?= $perubahan_akta_kelahiran['akta_perubahan'] ?>"><?= $perubahan_akta_kelahiran['akta_perubahan'] ?></a></td>
                   <td align="center">
                          <?php 
                            if($perubahan_akta_kelahiran['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <a href="cetak.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <a href="detail.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <a href="edit.php?id=<?=$perubahan_akta_kelahiran['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          
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