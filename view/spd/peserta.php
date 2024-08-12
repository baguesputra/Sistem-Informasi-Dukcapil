<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/surat_tugas_function.php';
  $data = new surat_tugas(); 
  $id = $_GET['id'];
  $surat_tugas = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Surat Tugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Surat Perintah Tugas</a></li>
              <li class="breadcrumb-item active">Edit Surat Perintah Tugas</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <form id="quickForm" action="proses_detail.php" method="post">
              <div class="card-body">
              <input type="text" name="id_surat_tugas" class="form-control" value="<?= $surat_tugas->id ?>" id="exampleInputEmail1" placeholder="Masukkan Gaji" hidden>
              <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      
                      <?php
                        foreach($data->pegawai() as $p):
                      ?>
                      <?php if($p['id'] == $surat_tugas->id_pegawai){ ?>
                      <option value="<?= $p['id'] ?>" selected hidden><?= $p['nama'] ?></option>
                      <?php } ?>
                      <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                 
                  
                  <input type="hidden" name="status" class="form-control" id="exampleInputPassword1" value="<?= $surat_tugas->status ?>" placeholder="Masukkan Agenda">
                </div>
                <div class="card-footer">
                  <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                </div>
              </form>

              <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Pegawai</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                     $no=1;
                     foreach($data->detail_surat_tugas() as $detail){
                      if ($surat_tugas->id == $detail['id_surat_tugas']){
                       
                  ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $detail['nama']; ?></td>
                        <td>
                        <a href="proses_detail.php?id=<?=$detail['id'] ?>" onclick="confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger fa fa-window-close"></a>
                        </td>
                      
                  </tr>
                <?php }} ?>
                </table>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>