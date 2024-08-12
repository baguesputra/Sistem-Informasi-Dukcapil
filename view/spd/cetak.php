
<?php 
  include '../../function/spd_function.php';
  $data = new spd(); 
  $id = $_GET['id'];
  $spd = $data->edit($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=Data, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="..../asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../asset/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../asset/css/adminlte.min.css">
  <link rel="stylesheet" href="../../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../asset/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../asset/plugins/summernote/summernote-bs4.min.css">
  <style>
    table tr td,table tr th{
      font-size: 8pt;
    }

    .line-title{
        border: 0;
        border-style: inset;
        border-top: 1px solid;
      }
  </style>
</head>
<body>
<img src="../../asset/img/logo_laporan2.png" style="position: absolute; width: 180px; height: 150px;margin-left:-30px;margin-top:px;"> 
    <table style="width: 105%;">
    <tr>
      <td></td>
    </tr>
			<tr>
        <td align="center">
        <p style="font-size:35px"><b>Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</b></p>
            <p style="font-size:24px">Alamat : Jl. Sultan Adam No.18, Surgi Mufti, Banjarmasin Utara, Kota Banjarmasin, <br> Kalimantan Selatan 70116, Indonesia. Nomor telepon: (0511) 3307293</p>
        </td>
			</tr>	
		</table>
    <hr class="line-title">
    <div class="teks">
   <h3 align="center"><u>Surat Perintah Perjalanan Dinas</u></h3>
   <h3 align="center">( S P P D)</h3>
   <br>
 <br>
 <br>

  <style>
    .tabel_bukti td {
      font-size: 23px;
    }
   </style>
<br>
   <table class="tabel_bukti" align="center">
   <?php
                        foreach($data->pegawai() as $p):
                          if ($spd->perintah == $p['id']){ 
                     ?>
    
    
      <tr >
       <td width="500px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black" align="left">1. Pejabat yang Memberi Perintah </td>
       
       <td width="500px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black" align="left"><?= $p['nama'] ?> / <?= $p['nik'] ?></td>
      
       <td></td>
       </tr>
       <?php } endforeach; ?>
   <?php
                        foreach($data->pegawai() as $p):
                          if($p['id'] == $spd->id_pegawai){
                     ?>
    
    
     
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">2. Nama Pegawai yang diperintah</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><?= $p['nama'] ?> / <?= $p['nik'] ?>  </td>
    
     
         
       </tr>
       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">3. <br> a. Pangkat dan Golongan <br> b. Jabatan</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> <?= $p['golongan'] ?> <?= $p['tingkat'] ?> <?= $p['ket'] ?> <br> <?= $p['jabatan'] ?>  </td>
       
     
         
       </tr>
       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">4. Maksud Perjalanan Dinas</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"> <?= $spd->rangka ?>  </td>
      
     
         
       </tr>
       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">5. Transportasi</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"> <?= $spd->transportasi ?>  </td>
    
     
         
       </tr>
       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">6. Tempat Tujuan</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"> <?= $spd->tujuan ?>  </td>
    
     
         
       </tr>

       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">7. <br> a. Tanggal Berangkat <br> b. Tanggal Pulang</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> <?= $spd->tanggal_awal ?> <br> <?= $spd->tanggal_akhir ?> </td>
       
     
         
       </tr>

       <tr>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">8. Pembiayaan</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"> <?= $spd->pembiayaan ?>  </td>
    
     
         
       </tr>
     

     <tr>
      <td height="20px"></td>
     </tr>
       <?php } endforeach; ?>
      
   </table>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

                <table  class="tabel_bukti"align="right" border="0">
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
      <img src="../../Arsip/qrcode/qrcode-1.png" alt="">
      </p></td>		</tr>
		</tr>
	</table>
  


</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h5 align="center"><b>Selaku Pelaksana Teknis Kegiatan</b></h5>
<table class="tabel_bukti" align="center">
	   
   <?php
                        foreach($data->pegawai() as $p):
                          if($p['id'] == $spd->id_pegawai){
                     ?>
    
    
      <tr >
      <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">I. <br> a. Tiba di: <br> b. Pada Tanggal: <br> c. Kepala:</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> Berangkat dari: <br> Ke<br>Pada Tanggal: <br>Kepala:</td>
       <td></td>
         
       </tr>
       <tr >
      <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">II. <br> a. Tiba di: <br> b. Pada Tanggal: <br> c. Kepala:</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> Berangkat dari: <br> Ke<br>Pada Tanggal: <br>Kepala:</td>
       <td></td>
         
       </tr>
       <tr >
      <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">III. <br> a. Tiba di: <br> b. Pada Tanggal: <br> c. Kepala:</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> Berangkat dari: <br> Ke<br>Pada Tanggal: <br>Kepala:</td>
       <td></td>
         
       </tr>
       <tr >
      <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left">IV. <br> a. Tiba di: <br> b. Pada Tanggal: <br> c. Kepala:</td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left"><br> Berangkat dari: <br> Ke<br>Pada Tanggal: <br>Kepala:</td>
       <td></td>
         
       </tr>
       <tr >
      <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="left" colspan="2">V. <br> Tiba Kembali: <br>Pada Tanggal: 
      <br> Telah diperiksa dengan seksama bahwa perjalanan dinas tersebut diatas benar dilakukan atas perintah dan semata-mata untuk kepentingan jabatan dalam waktu sesingkat singkatnya</td>
       <td></td>
         
       </tr>
       
     

     <tr>
      <td height="20px"></td>
     </tr>
       <?php } endforeach; ?>
      
   </table>
<br>
<br>
<br>  
   <table  class="tabel_bukti" align="right" border="0">
                <tr>
			<td ></td>
			<td align="center" ><p> Banjarmasin, <?= tgl_indo(date('Y-m-d')) ?> <br>KEPALA DINAS KEPENDUDUKAN PECATATAN SIPIL KOTA BANJARMASIN<br><br>
      <img src="../../Arsip/qrcode/qrcode-1.png" alt="">
   </p></td>		</tr>
		</tr>
	</table>
 

</body>


</html>



               
<script>
  window.print()
</script>