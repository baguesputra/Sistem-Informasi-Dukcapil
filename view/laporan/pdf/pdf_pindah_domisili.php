<?php 
  include '../../../function/pindah_domisili_function.php';
  $data = new pindah_domisili(); 
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
   <h3 align="center">Laporan Rekap Pindah Domisili</h3>
  
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
                  <th>Nik</th>
                    <th>Nama</th>
                    <th>Tanggal </th>
                    <th>Alamat Tujuan Pindah</th>
                    <th>Alasan</th>
                    <th>Verifikasi</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT pindah_domisili.id, pindah_domisili.alasan, pindah_domisili.alamat_tujuan,pindah_domisili.tanggal, penduduk.no_penduduk, penduduk.nama, pindah_domisili.status FROM pindah_domisili join penduduk on pindah_domisili.id_penduduk = penduduk.id WHERE pindah_domisili.tanggal BETWEEN '".$tglawal."' AND '".$tglakhir."' order by pindah_domisili.status desc"); 
                    while($pindah_domisili = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                   <td><?= $no++ ?></td>
                  <td><?= $pindah_domisili['no_penduduk']; ?></td>

                        <td><?= $pindah_domisili['nama']; ?></td>
                        <td><?=  $pindah_domisili['tanggal'] ?></td>
                        <td><?= $pindah_domisili['alamat_tujuan']; ?></td>
                        <td><?= $pindah_domisili['alasan']; ?></td>
                        <?php if($pindah_domisili['status'] == '0') {?>
                        <td style="color:red;" align="center"><i class="fa fa-times-circle" aria-hidden="true"></i>Belum Disetujui</td>
                        <?php } else { ?>
                        <td style="color:green;" align="center"><i class="fa fa-check-circle" aria-hidden="true"></i>Disetujui</td>
                        <?php }?>
                       
                      
                  </tr>
                <?php } ?>
                </table>
<br>

                <table  align="right" border="0">
                <tr>
			<td></td>
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