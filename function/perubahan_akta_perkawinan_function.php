<?php 
include 'config.php';

class perubahan_akta_perkawinan {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT perubahan_akta_perkawinan.id, akta_perkawinan.no, perubahan_akta_perkawinan.tgl_pengubahan, perubahan_akta_perkawinan.perubahan, perubahan_akta_perkawinan.akta_awal, perubahan_akta_perkawinan.akta_perubahan, akta_perkawinan.nama_pria, akta_perkawinan.nama_wanita, perubahan_akta_perkawinan.status  FROM perubahan_akta_perkawinan join akta_perkawinan on perubahan_akta_perkawinan.no_akta = akta_perkawinan.id"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function akta_perkawinan() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM akta_perkawinan"); 
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

    public function tambah($no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $namaFile = $_FILES['akta_awal']['name'];
        $namaSementara = $_FILES['akta_awal']['tmp_name'];
        $dirUpload = "../../arsip/perubahan akta perkawinan/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_awal = $namaFile;

        $namaFile2 = $_FILES['akta_perubahan']['name'];
        $namaSementara2 = $_FILES['akta_perubahan']['tmp_name'];
        $dirUpload2 = "../../arsip/perubahan akta perkawinan/";
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2.$namaFile2);

        $file_perubahan = $namaFile;

        $namaFile3 = $_FILES['dokumen']['name'];
        $namaSementara3 = $_FILES['dokumen']['tmp_name'];
        $dirUpload3 = "../../arsip/perubahan akta perkawinan/";
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3.$namaFile3);

        $file_dokumen = $namaFile3;

        $sql = "INSERT INTO perubahan_akta_perkawinan 
        (no_akta,tgl_pengajuan,tgl_pengubahan,perubahan,alasan,akta_awal,akta_perubahan,dokumen,updated_by,status) 
        VALUES 
        ('$no_akta','$tgl_pengajuan','$tgl_pengubahan','$perubahan','$alasan','$file_awal','$file_perubahan','$file_dokumen','$updated_by','$status')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM perubahan_akta_perkawinan WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE perubahan_akta_perkawinan SET no_akta='$no_akta', tgl_pengajuan='$tgl_pengajuan', 
        tgl_pengubahan='$tgl_pengubahan', perubahan='$perubahan', alasan='$alasan', updated_by=$updated_by, status='$status' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM perubahan_akta_perkawinan WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()){
        $baris = $obj;
        }
        return $baris;
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM perubahan_akta_perkawinan WHERE id='$id'";
        $conn->query($sql);
    } 

    public function approve($id, $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE perubahan_akta_perkawinan SET status='$status' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function upload($id,$surat_akta)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $namaFile = $_FILES['surat_akta']['name'];
        $namaSementara = $_FILES['surat_akta']['tmp_name'];
        $dirUpload = "../../arsip/surat_akta/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_awal = $namaFile;

        $sql = "UPDATE perubahan_akta_perkawinan SET surat_akta='$file_awal' WHERE id='$id'";
        $conn->query($sql);
    }
}
?>
