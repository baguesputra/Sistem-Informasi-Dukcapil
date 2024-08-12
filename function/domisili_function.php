<?php 
include 'config.php';

class domisili {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT domisili.id, domisili.id_penduduk, penduduk.nama, penduduk.no_penduduk, domisili.tanggal, domisili.surat_rt, domisili.status FROM domisili JOIN penduduk ON domisili.id_penduduk = penduduk.id"); 
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

    public function tambah($id_penduduk,$tanggal,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $namaFile = $_FILES['surat_rt']['name'];
        $namaSementara = $_FILES['surat_rt']['tmp_name'];
        $dirUpload = "../../arsip/surat_keterangan_domisili/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_rt = $namaFile;

        $namaFile2 = $_FILES['surat_capil']['name'];
        $namaSementara2 = $_FILES['surat_capil']['tmp_name'];
        $dirUpload2 = "../../arsip/surat_keterangan_domisili/";
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2.$namaFile2);

        $file_capil = $namaFile2;


        $namaFile3 = $_FILES['berkas_ktp']['name'];
        $namaSementara3 = $_FILES['berkas_ktp']['tmp_name'];
        $dirUpload3 = "../../arsip/surat_keterangan_domisili/";
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3.$namaFile3);

        $file_ktp = $namaFile3;

        $namaFile4 = $_FILES['berkas_kk']['name'];
        $namaSementara4 = $_FILES['berkas_kk']['tmp_name'];
        $dirUpload4 = "../../arsip/surat_keterangan_domisili/";
        $terupload4 = move_uploaded_file($namaSementara4, $dirUpload4.$namaFile4);

        $file_kk = $namaFile4;


        $sql = "INSERT INTO domisili 
        (id_penduduk,tanggal,surat_rt, surat_capil, berkas_ktp, berkas_kk, status) 
        VALUES 
        ('$id_penduduk','$tanggal','$file_rt', '$file_capil', '$file_ktp', '$file_kk', '$status')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM domisili WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$id_penduduk,$tanggal,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE domisili SET id_penduduk='$id_penduduk', tanggal=$tanggal, surat_rt=$surat_rt,
        surat_capil='$surat_capil', berkas_ktp='$berkas_ktp', berkas_kk='$berkas_kk' ,status='$status' 
        WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM domisili WHERE id='$id'";
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
        $sql = "UPDATE domisili SET status='$status' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM domisili WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
