<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/pegawai_function.php';
  $data = new pegawai(); 
  $id = $_GET['id'];
  $pegawai = $data->edit($id);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Pegawai</a></li>
              <li class="breadcrumb-item active">Edit Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-dark">
              <div class="card-header">
               
              </div>
              <form action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nip</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->nik ?>" placeholder="Masukkan Nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $pegawai->nama ?>" placeholder="Masukkan Nama Lengkap">
                    <input type="nama" name="id" class="form-control" id="exampleInputEmail1" value="<?= $pegawai->id ?>" placeholder="Masukkan Nama Lengkap" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->jk ?>" placeholder="Masukkan Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Agama</label>
                    <input type="text" name="agama" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->agama ?>" placeholder="Masukkan Agama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->alamat ?>" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->email ?>" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control">
                      
                      <?php
                        foreach($data->jabatan() as $j):
                      ?>
                      <?php if($j['id'] == $pegawai->jabatan){ ?>
                      <option value="<?= $j['id'] ?>" selected hidden><?= $j['jabatan'] ?></option>
                      <?php } ?>
                      <option value="<?= $j['id'] ?>"><?= $j['jabatan'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Golongan</label>
                    <select name="golongan" id="golongan" class="form-control">
                      
                      <?php
                        foreach($data->golongan() as $g):
                      ?>
                      <?php if($g['id'] == $pegawai->golongan){ ?>
                      <option value="<?= $g['id'] ?>" selected hidden><?= $g['golongan'] ?> - <?= $g['tingkat'] ?> (<?= $g['ket'] ?>)</option>
                      <?php } ?>
                      <option value="<?= $g['id'] ?>"><?= $g['golongan'] ?> - <?= $g['tingkat'] ?> (<?= $g['ket'] ?>)</option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" value="<?= $pegawai->no ?>" placeholder="Masukkan Nomor">
                  </div>
                
                 
                </div>
                <!-- /.card-body -->
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