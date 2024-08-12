<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/user_function.php';
  $data = new user(); 
  $id = $_GET['id'];
  $user = $data->edit_pegawai($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data User Pegawai</a></li>
              <li class="breadcrumb-item active">Edit User Pegawai</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-dark">
              <div class="card-header">
               
              </div>
              <form id="quickForm" action="proses.php" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">No Penduduk</label>
                    <select name="kepala_keluarga" id="kepala_keluarga" class="form-control">
                      <?php foreach ($data->pegawai() as $pegawai): {?>
                        <?php if($pegawai['id'] == $user->id_penduduk){?>
                        <option value="<?= $user->nik ?>" selected hidden><?= $pegawai['nik']; ?> - <?= $pegawai['nama']; ?></option>
                        <?php } ?>
                      <option value="<?= $pegawai['nik']; ?>"><?= $pegawai['nik']; ?> - <?= $pegawai['nama']; ?></option>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="f
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" value="<?= $user->username ?>" placeholder="Masukkan Username">
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $user->id ?>" placeholder="Masukkan Username" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="<?= $user->password ?>" placeholder="Masukkan Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <div class="form-group">
                      <select name="level" id="level" class="form-control">
                        <option value="<?= $user->level ?>" selected hidden><?= $user->level ?></option>
                        <option value="admin">Administrator</option>
                        <option value="atasan">Pimpinan</option>
                        <option value="pegawai">Pegawai / Staff</option>
                      </select>
                    </div>
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