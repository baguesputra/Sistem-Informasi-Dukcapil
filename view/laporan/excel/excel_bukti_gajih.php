<?php 
  include '../../../function/gajih_function.php';
  $data = new gajih(); 
?>
<?php 
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=Laporan-Gajih.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: max-age=0");
        header("Cache-Control: private",false); 
    ?> 
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>