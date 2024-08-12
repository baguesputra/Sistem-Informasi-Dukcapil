<?php include '../layout/header2.php'; ?>

<?php 
  include '../../function/pencapaian_function.php';
  $data = new pencapaian(); 
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
            <h1>Data Pencapaian Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pencapaian Pegawai</li>
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
              <div class="card-body table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Pegawai</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Pencapaian</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $pencapaian){
                     
                  ?>
                   <?php if($pencapaian['id_pegawai'] == $_SESSION['id_penduduk']) {?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pencapaian['nik']; ?></td>
                        <td><?= $pencapaian['nama']; ?></td>
                        <td><?= $pencapaian['jabatan']; ?></td>
                        <td><?= $pencapaian['golongan']; ?> <?= $pencapaian['tingkat']; ?> <?= $pencapaian['keterangan']; ?></td>
                        <td><?= $pencapaian['capaian']; ?></td>
                        <td><img src="../../Arsip/pencapaian/<?= $pencapaian['foto']; ?>" width="200" height="200" alt=""></td>
                      
                        <td align="center">
                          <a href="edit.php?id=<?=$pencapaian['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="proses.php?id=<?=$pencapaian['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                          <?php } ?>
                        </td>
                      
                  </tr>
                  <?php } elseif ($_SESSION['level']== 'admin') {?> 
                    <tr>
                    <td><?= $no++; ?></td>
                        <td><?= $pencapaian['nik']; ?></td>
                        <td><?= $pencapaian['nama']; ?></td>
                        <td><?= $pencapaian['jabatan']; ?></td>
                        <td><?= $pencapaian['golongan']; ?> <?= $pencapaian['tingkat']; ?> <?= $pencapaian['keterangan']; ?></td>
                        <td><?= $pencapaian['capaian']; ?></td>
                        <td><img src="../../Arsip/pencapaian/<?= $pencapaian['foto']; ?>" width="200" height="200" alt=""></td>
                     
                      
                        <td align="center">
                          <a href="edit.php?id=<?=$pencapaian['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="proses.php?id=<?=$pencapaian['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                          <?php } ?>
                        </td>
                      
                  </tr>
                  <?php } ?>
                <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>