<?php 
  include '../../../function/perubahan_akta_kelahiran_function.php';
  $data = new perubahan_akta_kelahiran(); 
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
   <h3 align="center">Laporan Rekap Perubahan Akta Kelahiran</h3>
   <br>

   <table class="static" rules="all" border="1px" align="center">
                  <thead>
                    <tr>
                    <th width="10px" align="center">No</th>
                      <th width="215px" align="center">No Akta</th>
                      <th width="215px" align="center">Tanggal Pengajuan</th>
                      <th width="215px" align="center">Tanggal Pengubahan</th>
                      <th width="215px" align="center">Perubahan</th>
                      <th width="215px" align="center">Alasan</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT * FROM perubahan_akta_kelahiran"); 
                    foreach($data as $d):{
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <?php 
                          $data=mysqli_query($conn,"SELECT * FROM akta_kelahiran"); 
                          while($akta_kelahiran = mysqli_fetch_array($data)){?>
                          <?php if ($akta_kelahiran['id']== $d['no_akta']){ ?>
                          <td><?= $akta_kelahiran['no_akta']; ?></td>
                          <?php } ?>
                          <?php } ?>
                          <td><?= $d['tgl_pengajuan']; ?></td>
                          <td><?= $d['tgl_pengubahan']; ?></td>
                          <td><?= $d['perubahan']; ?></td>
                          <td><?= $d['alasan']; ?></td>
                    </tr>
                  <?php } endforeach ?>
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