<?php $page = "domisili";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/domisili_function.php';
  $data = new domisili(); 
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
            <h1>Data Surat Keterangan Domisili</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keterangah Domisili</li>
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
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Tanggal </th>
                    <th>Berkas</th>
                    <th>Verifikasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $domisili)
                     if ($domisili['id_penduduk'] == $_SESSION['id_penduduk']) {
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                        <td><?= $domisili['no_penduduk']; ?></td>
                        <td><?= $domisili['nama']; ?></td>
                        <td><?= $domisili['tanggal']; ?></td>
                        <td><?= $domisili['surat_rt']; ?></td>
                        <?php if($domisili['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        <?php }?>
                        <td>
                        <?php if($domisili['status'] == '0'){ ?>
                     <p style="color:green;">Pengecekan Berkas</p>
                    <?php } else { ?>
                      <a href="cetak.php?id=<?=$domisili['id'] ?>" class="btn btn-warning fa fa-file"></a>
                      <?php } ?>
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="delete.php?id=<?=$domisili['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                          <?php } ?>
                        </td>
                      
                  </tr>
                <?php } elseif($_SESSION['id_penduduk'] == 0) {?>
                  <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $domisili['no_penduduk']; ?></td>
                    <td><?= $domisili['nama']; ?></td>
                    <td><?= $domisili['tanggal']; ?></td>
                    <td><?= $domisili['surat_rt']; ?></td>
                    <?php if($domisili['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        <?php }?>
                   <td>
                   <?php 
                            if($domisili['status'] == '0'){   
                          ?>
                     <a href="proses.php?id=<?=$domisili['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                     <?php } else {?>
                     <a href="cetak.php?id=<?=$domisili['id'] ?>" class="btn btn-secondary fa fa-file"></a>
                     <?php } ?>
                     <a href="edit.php?id=<?=$domisili['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                     <?php if($_SESSION['level']=='admin') { ?>
                     <a href="delete.php?id=<?=$domisili['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                     <?php } ?>
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