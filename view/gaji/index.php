<?php $page = "pegawai";?>
<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/gajih_function.php';
  $data = new gajih(); 
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
            <h1>Data gajih</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data gajih</li>
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
                    <th>Nip</th>
                    <th>Pegawai</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Tunjangan</th>
                    <th>Gaji</th>
                    <th>Total</th>
                    <th>ket</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $gajih){
                  ?>
                  <tr>
                   
                        <td><?= $no++ ?></td>
                        <td><?= $gajih['nik']; ?></td>
                        <td><?= $gajih['nama']; ?></td>
                        <td><?= $gajih['jabatan']; ?></td>
                        <td><?= $gajih['golongan']; ?> <?= $gajih['tingkat']; ?> <?= $gajih['ket']; ?></td>
                        <td><?= number_format($gajih['tunjangan'], 0, ',', '.') ?></td>
                        <td><?= number_format($gajih['gaji'], 0, ',', '.') ?></td>
                        <td><?= number_format($gajih['total'], 0, ',', '.') ?></td>
                        <td><?= $gajih['ket']; ?></td>
                        <td>
                          <a href="edit.php?id=<?=$gajih['id'] ?>" class="btn btn-warning fa fa-edit"></a>
                          <?php if($_SESSION['level']=='admin') { ?>
                          <a href="proses.php?id=<?=$gajih['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
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