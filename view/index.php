<?php include 'layout/header.php'; ?>
<?php 
  include '../function/dashboard_function.php';
  $data = new dashboard(); 
?>
<?php
  $koneksi = new koneksi();
  $conn =  $koneksi->get_connection();
  $penduduk=mysqli_query($conn,"SELECT * FROM penduduk"); 
  $akta_kelahiran=mysqli_query($conn,"SELECT * FROM akta_kelahiran"); 
  $akta_perkawinan=mysqli_query($conn,"SELECT * FROM akta_perkawinan");
  $akta_keluarga=mysqli_query($conn,"SELECT * FROM akta_keluarga");
  $pegawai=mysqli_query($conn,"SELECT * FROM pegawai");
  $spd=mysqli_query($conn,"SELECT * FROM spd");
  $lembur=mysqli_query($conn,"SELECT * FROM lembur");
  $cuti=mysqli_query($conn,"SELECT * FROM cuti");
  $jumlah_penduduk = mysqli_num_rows($penduduk);
  $jumlah_akta_kelahiran = mysqli_num_rows($akta_kelahiran);
  $jumlah_akta_perkawinan = mysqli_num_rows($akta_perkawinan);
  $jumlah_akta_keluarga = mysqli_num_rows($akta_keluarga);
  $jumlah_pegawai = mysqli_num_rows($pegawai);
  $jumlah_lembur = mysqli_num_rows($lembur);
  $jumlah_spd = mysqli_num_rows($spd);
  $jumlah_cuti = mysqli_num_rows($cuti);
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
           
          </div>
        </div>
      </div>
    </div>
    <?php if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'pegawai') {?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_penduduk ?></h3>

                <p>Penduduk</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
              <a href="penduduk/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_akta_kelahiran ?></h3>

                <p>Akta Kelahiran</p>
              </div>
              <div class="icon">
                <i class="fa fa-id-badge"></i>
              </div>
              <a href="akta_kelahiran/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_akta_perkawinan ?></h3>

                <p>Akta Perkawinan</p>
              </div>
              <div class="icon">
                <i class="fa fa-university"></i>
              </div>
              <a href="akta_perkawinan/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_akta_keluarga ?></h3>

                <p>Akta Keluarga</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="akta_keluarga/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $jumlah_pegawai ?></h3>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
              <a href="pegawai/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?= $jumlah_spd ?></h3>

                <p>SPPD</p>
              </div>
              <div class="icon">
                <i class="fa fa-id-badge"></i>
              </div>
              <a href="spd/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-light">
              <div class="inner">
                <h3><?= $jumlah_lembur ?></h3>

                <p>Lembur</p>
              </div>
              <div class="icon">
                <i class="fa fa-university"></i>
              </div>
              <a href="lembur/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?= $jumlah_cuti ?></h3>

                <p>Cuti</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="cuti/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>
    
   
    <section class="content">
    <form id="quickForm" action="proses.php" method="post">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Absen</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                      <option value="" selected hidden>--Pilih--</option>
                      <?php foreach ($data->pegawai() as $p): {?>
                        <?php if($p['id'] == $_SESSION['id_pegawai'] ){ ?>
                      <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                      <?php } elseif($_SESSION['level']== 'admin') { ?>
                        <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php } ?>
                      <?php } endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    
                    <select name="ket" id="ket" class="form-control" hidden>
                      <option value="" hidden selected>-- Pilih --</option>
                      <option value="HADIR" selected>HADIR</option>
                      <option value="ALPHA">ALPHA</option>
                      <option value="SAKIT">SAKIT</option>
                      <option value="IZIN">IZIN</option>
                    </select>
                  </div>
                 
                  <button type="submit" name="masuk" class="btn btn-success">Jam Masuk</button>
                  <button type="submit" name="keluar" class="btn btn-danger">Jam Keluar</button>
                </div>
              
                
                
              </form>
    </section>
    <?php } else { ?>
      <?php
  $koneksi = new koneksi();
  $conn =  $koneksi->get_connection(); 
  $id_login = $_SESSION['id_penduduk'];
  $akta_kelahiran2=mysqli_query($conn,"SELECT * FROM akta_kelahiran where ayah = $id_login or ibu = $id_login"); 
  $akta_perkawinan2=mysqli_query($conn,"SELECT * FROM akta_perkawinan where nama_pria = $id_login or nama_wanita = $id_login");
  $akta_keluarga2=mysqli_query($conn,"SELECT * FROM akta_keluarga where kepala_keluarga = $id_login");
  $jumlah_akta_kelahiran2 = mysqli_num_rows($akta_kelahiran2);
  $jumlah_akta_perkawinan2 = mysqli_num_rows($akta_perkawinan2);
  $jumlah_akta_keluarga2 = mysqli_num_rows($akta_keluarga2);
?>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_penduduk ?></h3>

                <p>Penduduk</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
              <a href="penduduk/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_akta_kelahiran2 ?></h3>

                <p>Akta Kelahiran</p>
              </div>
              <div class="icon">
                <i class="fa fa-id-badge"></i>
              </div>
              <a href="akta_kelahiran/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_akta_perkawinan2 ?></h3>

                <p>Akta Perkawinan</p>
              </div>
              <div class="icon">
                <i class="fa fa-university"></i>
              </div>
              <a href="akta_perkawinan/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_akta_keluarga2 ?></h3>

                <p>Akta Keluarga</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="akta_keluarga/index.php" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>
   





    

    <section class="content">
      <h3>Persyaratan</h3>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-6">
            
            <div class="small-box bg-info" >
              
              <div class="inner">
                <h3>Akta Kelahiran</h3>
              
                <p>1. Surat keterangan lahir dari dokter/bidan/penolong kelahiran</p>
                <p>2. Fotokopi Akta Nikah/Kutipan Akta Perkawinan orangtua (dilegalisir)</p>
                <p>3. Fotokopi KK dan KTP-el orangtua</p>
                <p>4. Fotokopi KTP-el 2 (dua) orang saksi</p>
                <p>5. Pencatatan kelahiran tidak dipungut biaya</p>
                <p>6. Surat kuasa di atas materai cukup bagi yang dikuasakan, dilampiri fotokopi KTP-el penerima kuasa</p>
              </div>
           
              <div class="icon">
              
                <i class="fa fa-globe"></i>
                
              </div>
             
              <a href="../Arsip/persyaratan/persyaratan_akta_kelahiran.pdf" class="small-box-footer">Download </a>
            </div>
          </div>
          <div class="col-lg-12 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Akta Perkawinan</h3>

                <p>1. KK asli suami dan istri</p>
                <p>2. Surat Keterangan Domisili dari Kelurahan</p>
                <p>3. Surat Keterangan Perkawinan dari Pemuka Agama /Salinan Penetapan Pengadilan Pemohon</p>
                <p>4. Fotokopi KTP-El Suami dan Istri (asli)</p>
                <p>5. Pas Foto Suami Istri berdampingan ukuran 4×6, 5 lembar</p>
                <p>6. Fotokopi kutipan akta kelahiran suami dan istri</p>
              </div>
              <div class="icon">
                <i class="fa fa-id-badge"></i>
              </div>
              <a href="../Arsip/persyaratan/persyaratan_akta_perkawinan.pdf" class="small-box-footer">Download </a>
            </div>
          </div>
          <div class="col-lg-12 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Akta Keluarga</h3>

                <p>1. FORMULIR F-101,</p>
                <p>2. KTP ORANGTUA & KARTU KELUARGA</p>
                <p>3. SURAT LAHIR DARI BIDAN/RUMAH SAKIT,</p>
                <p>4. BUKU NIKAH</p>
              
              </div>
              <div class="icon">
                <i class="fa fa-university"></i>
              </div>
              <a href="../Arsip/persyaratan/persyaratan_akta_keluarga.pdf" class="small-box-footer">Download </i></a>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>18</h3>

                <p>Cuti</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
        </div>
    </section>

    <?php } ?>
   
    
    
   
  </div>