<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/absen_function.php';
  $data = new absen(); 
  $id = $_GET['id'];
  $absen = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Absen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Absen</a></li>
              <li class="breadcrumb-item active">Edit Absen</li>
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
              <form id="quickForm" action="proses.php" method="post">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" value="<?= $absen->tgl ?>" placeholder="Masukkan Jenis Kelamin">
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $absen->id ?>" placeholder="Masukkan Jenis Kelamin" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      
                      <?php foreach ($data->pegawai() as $p): {?>
                        <?php if($p['id'] == $absen->id_pegawai){ ?>
                          <?php if($p['id'] == $_SESSION['id_pegawai'] ){ ?>
                            <option value="<?= $p['id']; ?>" selected hidden><?= $p['nama']; ?></option>
                          <?php } elseif($_SESSION['level']== 'admin') { ?>
                        <option value="<?= $p['id']; ?>" selected hidden><?= $p['nama']; ?></option>
                        <?php } ?>
                          
                        <?php } ?>
                      <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <select name="ket" id="ket" class="form-control">
                      <option value="<?= $absen->ket ?>" hidden selected><?= $absen->ket ?></option>
                      <option value="HADIR">HADIR</option>
                      <option value="ALPHA">ALPHA</option>
                      <option value="SAKIT">SAKIT</option>
                      <option value="IZIN">IZIN</option>
                    </select>
                  </div>
                 
                 
                </div>
                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-success">Ubah</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>