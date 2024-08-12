<?php include '../layout/header2.php'; ?>

<?php 
  include '../../function/spd_function.php';
  $data = new spd(); 
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
            <h1>Data Surat Perintah Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Surat Perintah Perjalanan Dinas</li>
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
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>Rangka</th>
                    <th>Verifikasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $spd){
                       
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $spd['nik']; ?></td>
                        <td><?= $spd['nama']; ?></td>
                        <td><?= $spd['jabatan']; ?></td>
                        <td><?= $spd['golongan']; ?> <?= $spd['tingkat']; ?> <?= $spd['ket']; ?></td>
                        <td><?= $spd['tujuan']; ?></td>
                        <td><?= $spd['tanggal_awal']; ?></td>
                        <td><?= $spd['rangka']; ?></td>
                        <?php if($spd['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        <?php }?>
                        <td align="center">
                          <?php 
                            if($spd['status'] == '0'){
                          ?>
                           <?php if($_SESSION['level']=='atasan' || $_SESSION['level']=='admin'){ ?>
                          <a href="proses.php?id=<?=$spd['id'] ?>" class="btn btn-success fa fa-check-circle"> Approve</a>
                          <?php }} else { ?>
                            <a href="cetak.php?id=<?=$spd['id'] ?>" class="btn btn-primary fa fa-file"></a>
                          <?php } ?>
                          <!-- <a href="peserta.php?id=<?=$spd['id'] ?>" class="btn btn-secondary fa fa-eye"></a> -->
                          <a href="edit.php?id=<?=$spd['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <a href="delete.php?id=<?=$spd['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
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