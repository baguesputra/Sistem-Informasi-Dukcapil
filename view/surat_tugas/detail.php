<?php include '../layout/header2.php'; ?>
<?php 
  include '../../function/jadwal_function.php';
  $data = new jadwal(); 
  $id = $_GET['id'];
  $jadwal = $data->edit($id);
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Jadwal Sidang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Data Jadwal Sidang</a></li>
              <li class="breadcrumb-item active">Edit Jadwal Sidang</li>
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
                    <label for="exampleInputPassword1">No</label>
                    <input type="text" name="no" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->no ?>" placeholder="Masukkan No Agenda" readonly>
                    <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->id ?>" placeholder="Masukkan No Agenda" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->tgl ?>" placeholder="Masukkan Jenis Kelamin" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Agenda</label>
                    <input type="text" name="agenda" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->agenda ?>" placeholder="Masukkan Agenda" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Rapat</label>
                    <select name="jenis" id="jenis" class="form-control" readonly>
                      <?php foreach ($data->jenisrapat() as $jenis): ?>
                        <?php if($jenis['id']==$jadwal->jenis){ ?>
                      <option value="<?= $jenis['id']; ?>" selected hidden><?= $jenis['jenis']; ?></option>
                       <?php } ?>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rapat Ke</label>
                    <input type="text" name="rapat" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->rapat ?>" placeholder="Masukkan Rapat Ke" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->tahun ?>" placeholder="Masukkan Tahun" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->ket ?>" placeholder="Masukkan keterangan" readonly>
                  </div>
                  <input type="text" name="ver" class="form-control" id="exampleInputPassword1" value="<?= $jadwal->ver ?>" placeholder="Masukkan keterangan" hidden>
                 
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