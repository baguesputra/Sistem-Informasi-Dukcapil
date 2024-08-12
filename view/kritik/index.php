<?php include '../layout/header2.php'; ?>

<?php 
  include '../../function/kritik_function.php';
  $data = new kritik(); 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('table').DataTable({
    "order": [[0,'desc']],
    lengthMenu: [[10, 50, 100], [10, 50, 100]]
});
} );
</script> 


  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kritik dan Saran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kritik dan Saran </li>
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
                    <!-- <a href="tambah.php" class="btn btn-success">Tambah</a> -->
                </h3>
              </div>
              <div class="card-body table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Kritik dan Saran</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->index() as $kritik){
                  ?>
                  <tr>
                        <td><?= $kritik['id']; ?></td>
                        <td><?= $kritik['tgl']; ?></td>
                        <td><?= $kritik['nama']; ?></td>
                        <td><?= $kritik['kritik']; ?></td>
                        <td>
                          <a href="detail.php?id=<?=$kritik['id'] ?>" class="btn btn-secondary fa fa-eye"></a>
                          <!-- <a href="edit.php?id=<?=$kritik['id'] ?>" class="btn btn-warning fa fa-edit"></a> -->
                          <a href="proses.php?id=<?=$kritik['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" name="hapus" id="hapus" class="btn btn-danger fa fa-window-close"></a>
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