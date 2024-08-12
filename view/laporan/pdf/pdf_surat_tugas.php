<?php 
  include '../../../function/surat_tugas_function.php';
  $data = new surat_tugas(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=Data, initial-scale=1.0">
  <style>
    table tr td,table tr th{
      font-size: 8pt;
    }

    .line-title{
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
      }
  </style>
</head>
<body>
<img src="../../../asset/img/logo_laporan2.png" style="position: absolute; width: 150px; height: 120px;margin-left:-30px;margin-top:10px;"> 
    <table style="width: 105%;">
    <tr>
      <td></td>
    </tr>
			<tr>
        <td align="center">
        <p style="font-size:23px"><b>Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</b></p>
            <p style="font-size:14px">Alamat : Jl. Sultan Adam No.18, Surgi Mufti, Banjarmasin Utara, Kota Banjarmasin, <br> Kalimantan Selatan 70116, Indonesia. Nomor telepon: (0511) 3307293</p>
        </td>
			</tr>	
		</table>
    <hr class="line-title">
    <div class="teks">
   <h3 align="center">Laporan Rekap Surat Perintah Tugas</h3>
   
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p align="center">Periode <?=$bulan1?> - <?=$bulan2?></p>
   <br>
   <style>
                  .static th{
                    font-size:14px;
                  }
                  .static td{
                    font-size:14px;
                  }
                </style>
   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                  <th width="10px" align="center">No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Tujuan</th>
                    <th>Rangka</th>
                    <th>Transportasi</th>
                    <th>Pembiayaan</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT surat_tugas.id, surat_tugas.id_pegawai, surat_tugas.tanggal_awal, surat_tugas.tanggal_akhir, surat_tugas.status, surat_tugas.rangka,surat_tugas.tujuan, surat_tugas.transportasi, surat_tugas.pembiayaan,pegawai.nama FROM surat_tugas join pegawai on surat_tugas.id_pegawai = pegawai.id WHERE tanggal_awal BETWEEN '".$tglawal."' AND '".$tglakhir."' ORDER BY surat_tugas.status DESC  "); 
                    while($surat_tugas = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                  <td><?= $no++; ?></td>
                        <td><?= $surat_tugas['nama']; ?></td>
                        <td><?= $surat_tugas['tanggal_awal']; ?> sampai <?= $surat_tugas['tanggal_akhir']; ?></td>
                        <td><?= $surat_tugas['tujuan']; ?></td>
                        <td><?= $surat_tugas['rangka']; ?></td>
                        <td><?= $surat_tugas['transportasi']; ?></td>
                        <td><?= $surat_tugas['pembiayaan']; ?></td>
                        <?php if($surat_tugas['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true">Belum Approve</i></td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true">Approve</i></td>
                        <?php }?>
                     
                      
                  </tr>
                  <?php } ?>
                </table>
<br>

                <table  align="right" border="0">
                <tr>
			<td ></td>
      <?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  
}?>
			<td align="center" ><p> Banjarmasin, <?= tgl_indo(date('Y-m-d')) ?> <br>KEPALA DINAS KEPENDUDUKAN PECATATAN SIPIL KOTA BANJARMASIN<br><br>
      <img src="../../../Arsip/qrcode/qrcode-1.png" alt="">
      </p></td>		</tr>
		</tr>
	</table>
  


</div>

</body>


</html>



               
<script>
  window.print()
</script>