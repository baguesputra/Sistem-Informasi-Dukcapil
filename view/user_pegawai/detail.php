<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/user_function.php';
  $data = new user(); 
  $id = $_GET['id'];
  $user = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data User</a></li>
              <li class="breadcrumb-item active">Detail User</li>
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
                    <label for="exampleInputEmail1">No</label>
                    <input type="text" name="pegawai" class="form-control" id="exampleInputPassword1" value="<?= $user->id_penduduk ?>" placeholder="Masukkan Username" readonly>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" value="<?= $user->username ?>" placeholder="Masukkan Username" readonly>
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $user->id ?>" placeholder="Masukkan Username" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="<?= $user->password ?>" placeholder="Masukkan Password" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <div class="form-group">
                      <select name="level" id="level" class="form-control" readonly>
                        <option value="<?= $user->level ?>" selected hidden><?= $user->level ?></option>
                      </select>
                    </div>
                  </div>
                 
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