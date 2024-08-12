
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
   <h3 align="center"><u>Akta Kelahiran</u></h3>
   
   <br>
 
   <table class="table">
	   
   <?php
                        foreach($data->pegawai() as $p):
                          if($p['id'] == $spd->pegawai){
                     ?>
     <tbody>
      <tr>
       <td width="150px">Nik</td>
       <td width="10px">: <?= $p['nik'] ?> </td>
       <td></td>
         
       </tr>
       <tr>
       <td width="150px">Nama</td>
       <td width="10px">: <?= $p['nama'] ?> </td>
       <td></td>
         
       </tr>
       <tr>
       <td width="150px">Jabatan</td>
       <td width="10px">: <?= $p['jabatan'] ?> </td>
       <td></td>
         
       </tr>

       <?php } endforeach; ?>
       <tr>

       <td width="130px">Perjalanan Dinas</td>
       <td width="200px">: <?= $spd->tujuan ?></td>
       <td></td>
       </tr>
       <tr>

       <td width="130px">Pada Tanggal</td>
       <td width="10px">:<?= $spd->tgl ?></td>
       <td></td>	
       </tr>
       <tr>

       <td width="130px">Bertempat</td>
       <td width="10px">:<?= $spd->kota ?></td>
       <td></td>	
       </tr>
       
       
     </tbody>
    
   </table>
  
<br>

                <table width="30%" align="right" border="0">
                <tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN <br>KOTA BANJARMASIN<br>KETUA,<br><br>
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