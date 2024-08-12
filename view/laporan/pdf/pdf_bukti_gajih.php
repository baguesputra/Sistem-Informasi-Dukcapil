<?php 
  include '../../../function/gajih_function.php';
  $data = new gajih(); 
  $tglawal = $_GET['tgl1'];
  $tglakhir = $_GET['tgl2'];
  $id_pegawai = $_GET['id_pegawai']
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
   <h3 align="center">Bukti Gaji Pegawai</h3>
  
   <?php
    $bulan1 =date('d F Y', strtotime($tglawal));
    $bulan2 =date('d F Y', strtotime($tglakhir));
    ?>
   <p align="center">Periode <?=$bulan1?>-<?=$bulan2?></p>
   <br>

   <style>
    .tabel_bukti td {
      font-size: 18px;
    }
   </style>

<table class="tabel_bukti">
   <?php
                  foreach($data->bukti_gaji() as $d):
                    if($d['id'] == $id_pegawai){          
                  ?>
     <tbody>
      <tr>
       
       <td width="150px" >1. Nama Pegawai</td>
       <td width="300px">: <?= $d['nik'] ?> <?= $d['nama'] ?></td>
         
       </tr>
       <tr>
       <td width="150px">2. Pangkat</td>
       <td width="300px">: <?= $d['golongan'] ?> <?= $d['tingkat'] ?> <?= $d['ket'] ?> </td>
         
       </tr>
       <tr>
       <td width="150px">3. Jabatan</td>
       <td width="300px">: <?= $d['jabatan'] ?> </td>
         
       </tr>

       <tr>
       <td width="150px">4. Gaji</td>
       <td width="300px">: Rp. <?= number_format($d['gaji'], 0, ',', '.') ?></td>
         
       </tr>

       <tr>
       <td width="150px">5. Tunjangan</td>
       <td width="300px">: Rp. <?= number_format($d['tunjangan'], 0, ',', '.') ?> </td>
         
       </tr>
       


       <?php 
       $koneksi = new koneksi();
       $conn =  $koneksi->get_connection();
                        $total_alpha = 0;
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $jumlah_alpha=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='ALPHA' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $alpha = mysqli_num_rows($jumlah_alpha) ;
                        
                         //  foreach ($jumlah_alpha as $jlh_alpha):
                        //  $total_alpha += $jlh_alpha['id'];
                         ?>
                         
                         <tr>
       <td width="150px">6. Alpha</td>
       <td width="300px">: <?= $alpha ?> </td>
         
       </tr> 
                      

                        <?php
                         $jumlah_telat=mysqli_query($conn,"SELECT * FROM absen WHERE absen.ket='TELAT' and id_pegawai=$id_pegawai  and absen.tgl BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                         $telat = mysqli_num_rows($jumlah_telat);
                         ?>
                         
                        
                         <tr>
       <td width="150px">7. Telat</td>
       <td width="300px">: <?= $telat ?> </td>
         
       </tr> 

                        <?php
                        
                         $jumlah_lembur=mysqli_query($conn,"SELECT sum(total) as total FROM lembur WHERE id_pegawai=$id_pegawai  and lembur.tanggal BETWEEN '".$tglawal."' AND '".$tglakhir."' ");
                        
                         while( $lembur = mysqli_fetch_array($jumlah_lembur)){
                          $lembur_total = $lembur['total']
                         ?>

<tr>
       <td width="150px">8. Lembur</td>
       <td width="300px">: Rp. <?= number_format($lembur['total'], 0, ',', '.') ?></td>
         
       </tr> 
                        <?php } ?>

                        <?php $total = ($d['total'] - ($alpha * 100000) - ($telat * 10000)) + $lembur_total; ?>
                        <tr>
       <td width="150px">9. Total Keseluruhan</td>
       <td width="300px">: Rp. <?= number_format($total, 0, ',', '.') ?></td>
         
       </tr> 
                         
                    </tr>

       <?php }endforeach; ?>
      
       
       
     </tbody>
    
   </table>
  
<br>

                <table align="right" border="0">
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