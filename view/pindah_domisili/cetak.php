
<?php 
  include '../../function/pindah_domisili_function.php';
  $data = new pindah_domisili(); 
  $id = $_GET['id'];
  $pindah_domisili = $data->edit($id);
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
<img src="../../asset/img/logo_laporan2.png" style="position: absolute; width: 150px; height: 120px;margin-left:-30px;margin-top:10px;"> 
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
   <h3 align="center">Surat Keterangan Pindah Domisili</h3>
   <br>
  <p>Yang bertanda tangan dibawah ini Kepala Dinas Kependudukan dan Pencatatan Sipil Kota Banjarmasin menyatakan bahwa:</p>

  <style>
    .tabel_domisili td {
      font-size: 18px;
    }
   </style>

   <table class="tabel_domisili">
	   
   <?php
                        foreach($data->penduduk() as $p):
                          if($p['id'] == $pindah_domisili->id_penduduk){
                     ?>
     <tbody>
      <tr>
       <td width="150px">No Penduduk</td>
       <td width="300px">: <?= $p['no_penduduk'] ?> </td>
       <td></td>
         
       </tr>
       <tr>
       <td width="150px">Nama</td>
       <td width="10px">: <?= $p['nama'] ?> </td>
       <td></td>
         
       </tr>
       <tr>
       <td width="150px">Jenis Kelamin</td>
       <td width="10px">: <?= $p['jk'] ?> </td>
       <td></td>
         
       </tr>
	   <tr>
       <td width="150px">Tempat Lahir</td>
       <td width="10px">: <?= $p['tempat_lahir'] ?> </td>
       <td></td>
         
       </tr>
	   <tr>
       <td width="150px">Alamat Sekarang</td>
       <td width="10px">: <?= $p['alamat'] ?> </td>
       <td></td>
         
       </tr>


	   <!-- <tr>
       <td width="150px">No</td>
       <td width="10px">: <?= $p['no'] ?> </td>
       <td></td>
         
       </tr> -->

       <?php } endforeach; ?>
       <tr>

       <tr>
       <td width="150px">Alamat Tujuan Pindah</td>
       <td width="10px">: <?= $pindah_domisili->alamat_tujuan ?> </td>
       <td></td>
         
       </tr>

       <tr>
       <td width="150px">Alasan</td>
       <td width="10px">: <?= $pindah_domisili->alasan ?> </td>
       <td></td>
         
       </tr>

      
     </tbody>
    
   </table>


   <br>
  <p style="font-size:15px">Demikian Surat Pengantar Pindah ini dibuat dan kepada yang bersangkutan untuk
  dipergunakan sebagaimana mestinya.</p>

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
      <img src="../../Arsip/qrcode/qrcode-1.png" alt="">
      </p></td>		</tr>
		</tr>
	</table>
  

</div>

</body>


</html>



               
<script>
  window.print()
</script>