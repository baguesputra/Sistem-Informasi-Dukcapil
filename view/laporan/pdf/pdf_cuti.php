<?php 
  include '../../../function/cuti_function.php';
  $data = new cuti(); 
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
   <h3 align="center">Laporan Rekap Cuti Pegawai</h3>
   
   
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p align="center">Periode <?=$bulan1?>-<?=$bulan2?></p>
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
                    <th>Tanggal Cuti</th>
                    <th>Hari</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT cuti.id, cuti.id_pegawai, cuti.tanggal_awal, cuti.tanggal_akhir, cuti.status, cuti.keperluan, pegawai.nama FROM cuti join pegawai on cuti.id_pegawai = pegawai.id WHERE tanggal_awal BETWEEN '".$tglawal."' AND '".$tglakhir."' "); 
                    while($cuti = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                  <td><?= $no++; ?></td>
                        <td><?= $cuti['nama']; ?></td>
                        <td><?= $cuti['tanggal_awal']; ?> sampai <?= $cuti['tanggal_akhir']; ?></td>
                        <?php 
                          $date1 = new DateTime($cuti['tanggal_awal']);
                          $date2 = new DateTime($cuti['tanggal_akhir']);
                          $interval = $date1->diff($date2);
                        ?>
                        <td><?= $interval->days ?></td>
                        <td><?= $cuti['keperluan']; ?></td>
                        <?php if($cuti['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i>MenungguApprove</td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i>Approve</td>
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