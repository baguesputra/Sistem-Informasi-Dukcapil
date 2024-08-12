
<?php 
  include '../../function/surat_tugas_function.php';
  $data = new surat_tugas(); 
  $id = $_GET['id'];
  $surat_tugas = $data->edit($id);
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
<img src="../../asset/img/logo_laporan.jpg" style="position: absolute; width: 100px; height: auto;"> 
    <table style="width: 105%;">
			<tr>
        <td align="center">
        <h2>Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</h2>
     Alamat : Jl. Sultan Adam No.18, Surgi Mufti, Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70116, Indonesia. <br> Nomor telepon: (0511) 3307293</p>
    </tr>	  
		</table><br>
    <hr class="line-title">
    <div class="teks">
   <h3 align="center"><u>Surat Perintah Perjalan Dinas</u></h3>
   <br>
 <br>
 <br>

  <style>
    .tabel_bukti td {
      font-size: 23px;
    }
   </style>
<p style="font-size:23px;" align="center">MEMERINTAHKAN :</p>
<br>
   <table class="tabel_bukti" >
	   
   <?php
                        foreach($data->pegawai() as $p):
                          if($p['id'] == $surat_tugas->id_pegawai){
                     ?>
    
    
      <tr >
       <td width="150px">KEPADA</td>
       <td width="200px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black" align="center">NAMA / NIP </td>
       <td width="200px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black" align="center">PANGKAT/GOL </td>
       <td width="200px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black" align="center">JABATAN </td>
       <td></td>
         
       </tr>
       <tr>
       <td width="150px"></td>
       <td width="400px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black">NIP <?= $p['nik'] ?> <br> Nama <?= $p['nama'] ?>  </td>
       <td width="10px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="center"> <?= $p['golongan'] ?> </td>
       <td width="10px" style="border-top: 1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black" align="center"> <?= $p['jabatan'] ?> </td>
       <td></td>
         
       </tr>
     

     <tr>
      <td height="20px"></td>
     </tr>
       <?php } endforeach; ?>
       </table>
       <table class="tabel_bukti">
       <tr>

       <td width="150px">UNTUK</td>
       <td width="200px">:1. Perihal</td>
       <td width="800px">: <?= $surat_tugas->rangka ?></td>
       <td></td>
       </tr>
       <tr>

        <tr>

       <td width="130px"></td>
       <td width="130px"> 2. Tujuan</td>
       <td width="200px">: <?= $surat_tugas->tujuan ?></td>
       <td></td>
       </tr>

       <tr>

       <td width="130px"></td>
       <td width="130px"> 3.Tanggal</td>
       <td width="10px">: <?= $surat_tugas->tanggal_awal ?> sampai <?= $surat_tugas->tanggal_akhir ?></td>
       <td></td>	
       </tr>
       <tr>

       <tr>
       <td width="130px"></td>
       <td width="130px"> 4.Transportasi</td>
       <td width="10px">: <?= $surat_tugas->transportasi ?></td>
       <td></td>	
       </tr>
       <tr>

       <td width="130px"></td>
       <td width="130px"> 5.Pembiayaan</td>
       <td width="10px">: <?= $surat_tugas->pembiayaan ?></td>
       <td></td>	
       </tr>
       
       
     
    
   </table>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>

                <table  class="tabel_bukti" width="30%" align="right" border="0">
                <tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN <br>KOTA BANJARMASIN<br>KEPALA DINAS,<br><br>
      <img src="../../Arsip/qrcode/qrcode-1.png" alt="">
      <br><u></u><br><strong>NIP.19860912 201001 1 006</strong></p></td>		</tr>
		</tr>
	</table>
  <?php
        include "../../asset/phpqrcode/qrlib.php";    // Ini adalah letak pemyimpanan plugin qrcode

        $tempdir = "../../Arsip/qrcode/";        // Nama folder untuk pemyimpanan file img qrcode
        
        if (!file_exists($tempdir))        //jika folder belum ada, maka buat
        mkdir($tempdir);
        $tanggal = date("d-m-Y H:i:s");
        $teks_qrcode    ="YUSNA IRAWAN, SE., M.Eng  ${tanggal} ";
        
        $namafile       ="qrcode-1.png";
        $quality        ="H"; // ini ada 4 pilihan yaitu L (Low), M(Medium), Q(Good), H(High)
        $ukuran         =3; // 1 adalah yang terkecil, 10 paling besar
        $padding        =1;

        QRCode::png($teks_qrcode, $tempdir.$namafile, $quality, $ukuran, $padding); 
    ?>


</div>

</body>


</html>



               
<script>
  window.print()
</script>