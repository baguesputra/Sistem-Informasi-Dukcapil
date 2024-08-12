<?php 
  include '../../../function/kritik_function.php';
  $data = new kritik(); 
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
   <h3 align="center">Laporan Rekap Kritik dan Saran</h3>
   <br>
   <h3>Laporan Rekap Kritik dan Saran</h3>
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p >Periode <?=$bulan1?>-<?=$bulan2?></p>
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
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Tanggal</th>
                    <th width="215px" align="center">Nama</th>
                    <th width="215px" align="center">Instansi</th>
                    <th width="215px" align="center">Alamat</th>
                    <th width="215px" align="center">Kota</th>
                    <th width="215px" align="center">Email</th>
                    <th width="215px" align="center">No</th>
                    <th width="215px" align="center">Kritik dan Saran
                  </thead>
                  <?php
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM kritik WHERE tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' "); 
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
                        <td><?= $d['kritik']; ?></td>
                     
                      
                  </tr>
                  <?php } ?>
                </table>
<br>

                <table width="30%" align="right" border="0">
		<tr>
			<td width="10%"></td>
			<td align="center"><p> PIMPINAN DEWAN PERWAKILAN RAKYAT<br>DAERAH KOTA BANJARMASIN<br>KEPALA DINAS,<br><br><br><br><br><u>H.HARRY WIJAYA</u></p></td>		</tr>
		</tr>
	</table>


</div>

</body>


</html>



               
<script>
  window.print()
</script>