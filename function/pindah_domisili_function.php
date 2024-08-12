<?php 
include 'config.php';

class pindah_domisili {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pindah_domisili.id, pindah_domisili.alamat_tujuan, pindah_domisili.alasan, pindah_domisili.surat_domisili,pindah_domisili.id_penduduk, penduduk.nama, penduduk.no_penduduk, pindah_domisili.tanggal, pindah_domisili.surat_rt, pindah_domisili.status FROM pindah_domisili JOIN penduduk ON pindah_domisili.id_penduduk = penduduk.id"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function penduduk() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM penduduk"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    function selectdatabyid($table,$id) 
    { 
        $select="SELECT * FROM $table where id= $id"; 
        $select1=mysqli_query($GLOBALS['connect'],$select); 
        return mysqli_fetch_array($select1); 
    } 

    public function tambah($id_penduduk,$tanggal, $alamat_tujuan, $alasan,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $surat_domisili,$status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $namaFile = $_FILES['surat_rt']['name'];
        $namaSementara = $_FILES['surat_rt']['tmp_name'];
        $dirUpload = "../../arsip/surat_keterangan_pindah_domisili/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_rt = $namaFile;

        $namaFile2 = $_FILES['surat_capil']['name'];
        $namaSementara2 = $_FILES['surat_capil']['tmp_name'];
        $dirUpload2 = "../../arsip/surat_keterangan_pindah_domisili/";
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2.$namaFile2);

        $file_capil = $namaFile2;


        $namaFile3 = $_FILES['berkas_ktp']['name'];
        $namaSementara3 = $_FILES['berkas_ktp']['tmp_name'];
        $dirUpload3 = "../../arsip/surat_keterangan_pindah_domisili/";
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3.$namaFile3);

        $file_ktp = $namaFile3;

        $namaFile4 = $_FILES['berkas_kk']['name'];
        $namaSementara4 = $_FILES['berkas_kk']['tmp_name'];
        $dirUpload4 = "../../arsip/surat_keterangan_pindah_domisili/";
        $terupload4 = move_uploaded_file($namaSementara4, $dirUpload4.$namaFile4);

        $file_kk = $namaFile4;

        $namaFile5 = $_FILES['surat_domisili']['name'];
        $namaSementara5 = $_FILES['surat_domisili']['tmp_name'];
        $dirUpload5 = "../../arsip/surat_keterangan_pindah_domisili/";
        $terupload5 = move_uploaded_file($namaSementara5, $dirUpload5.$namaFile5);

        $file_domisili = $namaFile5;


        $sql = "INSERT INTO pindah_domisili 
        (id_penduduk,tanggal, alamat_tujuan, alasan,surat_rt, surat_capil, berkas_ktp, berkas_kk, surat_domisili,status) 
        VALUES 
        ('$id_penduduk','$tanggal', '$alamat_tujuan', '$alasan','$file_rt', '$file_capil', '$file_ktp', '$file_kk', '$file_domisili','$status')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pindah_domisili WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$id_penduduk,$tanggal, $alamat_tujuan, $alasan,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $surat_domisili,$status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pindah_domisili SET id_penduduk='$id_penduduk', tanggal=$tanggal, surat_rt=$surat_rt,
        surat_capil='$surat_capil', berkas_ktp='$berkas_ktp', berkas_kk='$berkas_kk' ,status='$status' 
        WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pindah_domisili WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()){
        $baris = $obj;
        }
        return $baris;
    } 

    public function approve($id, $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pindah_domisili SET status='$status' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM pindah_domisili WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
