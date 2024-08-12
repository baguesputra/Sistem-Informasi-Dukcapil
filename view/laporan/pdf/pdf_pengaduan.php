<?php 
  include '../../../function/pengaduan_function.php';
  $data = new pengaduan(); 
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
<img src="../../../asset/img/logo_laporan.jpg" style="position: absolute; width: 100px; height: auto;"> 
    <table style="width: 105%;">
			<tr>
        <td align="center">
        <h2>Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin</h2>
     Alamat : Jl. Sultan Adam No.18, Surgi Mufti, Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70116, Indonesia. <br> Nomor telepon: (0511) 3307293</p>
    </tr>	
		</table><br>
    <hr class="line-title">
    <div class="teks">
   <h3 align="center">Laporan Rekap Pengaduan</h3>
   <br>
   <h3>Laporan Rekap Pengaduan</h3>
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p >Periode <?=$bulan1?>-<?=$bulan2?></p>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                  <tr>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Tanggal</th>
                    <th width="215px" align="center">Nama</th>
                    <th width="215px" align="center">Instansi</th>
                    <th width="215px" align="center">Alamat</th>
                    <th width="215px" align="center">Kota</th>
                    <th width="215px" align="center">Email</th>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Pengaduan</th>
                  </tr>
                  </thead>
                  <?php
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM pengaduan WHERE tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' "); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                  <tr>
                        <td><?= $d['id']; ?></td>
                        <td><?= $d['tgl']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['instansi']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['kota']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['no']; ?></td>
                        <td><?= $d['pengaduan']; ?></td>
                     
                      
                  </tr>
                  <?php } ?>
                </table>
<br>

                <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN DEWAN PERWAKILAN RAKYAT<br>DAERAH KOTA BANJARMASIN<br>KEPALA DINAS,<br><br><br><br><br><u>H.HARRY WIJAYA</u><br><strong>NIP.19860912 201001 1 006</strong></p></td>		</tr>
		</tr>
	</table>
  <?php
        include "../../../asset/phpqrcode/qrlib.php";    // Ini adalah letak pemyimpanan plugin qrcode

        $tempdir = "../../../Arsip/qrcode/";        // Nama folder untuk pemyimpanan file img qrcode
        
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