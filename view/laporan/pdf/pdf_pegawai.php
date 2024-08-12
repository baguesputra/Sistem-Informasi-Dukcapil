<?php 
  include '../../../function/pegawai_function.php';
  $data = new pegawai(); 
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
   <h3 align="center">Laporan Rekap Pegawai</h3>
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
                      <th width="215px" align="center">Tanggal Lahir</th>
                      <th width="215px" align="center">Agama</th>
                      <th width="215px" align="center">Jenis Kelamin</th>
                      <th width="215px" align="center">Alamat</th>
                      <th width="215px" align="center">Email</th>
                      <th width="215px" align="center">Jabatan</th>
                      <th width="215px" align="center">No</th>
                    </tr>
                  </thead>
                  <?php
                    $no = 1;
                    $koneksi = new koneksi();
                    $conn =  $koneksi->get_connection();
                    $data=mysqli_query($conn,"SELECT pegawai.id, pegawai.nama, pegawai.nik, pegawai.tgl_lahir, pegawai.jk, pegawai.agama,pegawai.alamat, pegawai.email, pegawai.no, jabatan.jabatan FROM pegawai join jabatan on jabatan.id = pegawai.jabatan"); 
                    while($d = mysqli_fetch_array($data)){
                    
                  ?>
                    <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d['nama']; ?></td>
                          <td><?= $d['tgl_lahir']; ?></td>
                          <td><?= $d['agama']; ?></td>
                          <td><?= $d['jk']; ?></td>
                          <td><?= $d['alamat']; ?></td>
                          <td><?= $d['email']; ?></td>
                          <td><?= $d['jabatan']; ?></td>
                          <td><?= $d['no']; ?></td>
                    </tr>
                  <?php } ?>
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