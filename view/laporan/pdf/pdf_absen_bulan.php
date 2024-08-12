<?php 
  include '../../../function/absen_function.php';
  $data = new absen(); 
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
   <h3 align="center">Laporan Rekap Absen</h3>
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p align="center">Periode <?=$bulan1?>-<?=$bulan2?></p>
   <br>
   
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
                    <th width="215px" align="center">Nama</th>
                    <th width="50px" align="center">Hadir</th>
                    <th width="50px" align="center">Telat</th>
                    <th width="50px" align="center">Alpha</th>
                    <th width="50px" align="center">Izin</th>
                  </tr>
                  </thead>
                  <?php
                    $no = 1;
                    
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT *  FROM pegawai "); 
                    while($d = mysqli_fetch_array($data)){
                    $id_pegawai = $d['id'];
                  ?>
                  <tr>
                        <td align="center"><?= $no++; ?></td>
                        <td><?= $d['nama']; ?></td>
                       
                        <?php 
                         $jumlah_hadir=mysqli_query($conn,"SELECT * FROM absen WHERE ket='HADIR' and id_pegawai= '".$d['id']."'  and tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $hadir = mysqli_num_rows($jumlah_hadir);
                        ?>
                        <td align="center"><?= $hadir ?></td> 

                      
                        <?php
                         $jumlah_telat=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='TELAT' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $telat = mysqli_num_rows($jumlah_telat);
                         ?>
                         
                        
                        <td align="center"><?= $telat ?></td> 

                        <?php 
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $alpha = mysqli_num_rows($jumlah_alpha) ;
                         ?>
                         
                        <td align="center"><?= $alpha ?></td> 


                        <?php 
                         $jumlah_izin=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='IZIN' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $izin = mysqli_num_rows($jumlah_izin);
                         ?>
                      
                        <td align="center"><?= $izin ?></td> 
                     
                      
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