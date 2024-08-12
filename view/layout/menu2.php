<div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if($_SESSION['level']=='admin' || $_SESSION['level']=='atasan'){ ?>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../user/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../user_pegawai/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pegawai/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../jabatan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../golongan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../penduduk/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penduduk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Kepegawaian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../absen/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../cuti/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../lembur/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../gaji/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../surat_tugas/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Perintah Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../spd/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pencapaian/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pencapaian</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kependudukan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="../domisili/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pindah_domisili/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keterangan Pindah Domisili</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../kritik/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kritik dan Saran</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="../pengaduan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan</p>
                </a>
              </li> -->
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-id-badge"></i>
              <p>
                Akta Kelahiran
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Kelahiran</p>
                </a>
              </li>       
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Akta Perkawinan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Perkawinan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Akta Keluarga
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Keluarga</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../laporan/laporan_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_penduduk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_bulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Absen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_bukti_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bukti Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_kelahiran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_kelahiran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_perkawinan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_perkawinan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_surat_tugas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Perintah Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_domisili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pindah_domisili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan Pindah Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_cuti.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_lembur.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_spd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pencapaian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pencapaian</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../laporan/laporan_pengaduan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan</p>
                </a>
              </li> -->
            </ul>
          </li>
          <?php } ?>


          <!-- User Pegawai -->
          <?php if($_SESSION['level']=='pegawai'){ ?>
            <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Kepegawaian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../absen/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../cuti/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../lembur/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../gaji/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../surat_tugas/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Perintah Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../spd/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pencapaian/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pencapaian</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../laporan/laporan_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_penduduk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_bulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Absen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_absen_pegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_bukti_gaji.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bukti Gaji Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_kelahiran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_kelahiran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_perkawinan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_perkawinan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_akta_keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perubahan_akta_keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_surat_tugas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Perintah Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_domisili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pindah_domisili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keterangan Pindah Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_cuti.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_lembur.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_spd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_pencapaian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pencapaian</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../laporan/laporan_pengaduan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan</p>
                </a>
              </li> -->
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-id-badge"></i>
              <p>
                Akta Kelahiran
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Kelahiran</p>
                </a>
              </li>       
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Akta Perkawinan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Perkawinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Perkawinan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Akta Keluarga
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Keluarga</p>
                </a>
              </li>
            </ul>
          </li> -->
          <?php } ?>
      


        <!-- User Masyarakat -->
        <?php if($_SESSION['level']=='masyarakat'){ ?>
            <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kependudukan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="../domisili/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pindah_domisili/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keterangan Pindah Domisili</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-id-badge"></i>
              <p>
                Akta Kelahiran
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Kelahiran</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../perubahan_akta_kelahiran/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Kelahiran</p>
                </a>
              </li>        -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Akta Perkawinan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Perkawinan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../perubahan_akta_perkawinan/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Perkawinan</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Akta Keluarga
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembuatan Akta Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../perubahan_akta_keluarga/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perubahan Akta Keluarga</p>
                </a>
              </li>
            </ul>
          </li>
          
          <?php } ?>
         
        </ul>
      </nav>
    </div>
  </aside>