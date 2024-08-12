<?php 
include 'config.php';

class akta_keluarga {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM akta_keluarga"); 
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

    public function tambah($no_kk,$alamat,$kepala_keluarga,$tgl_dibuat,$updated_by,$status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $sql = "INSERT INTO akta_keluarga 
        (no_kk,alamat,kepala_keluarga,tgl_dibuat,updated_by,status) 
        VALUES 
        ('$no_kk','$alamat','$kepala_keluarga','$tgl_dibuat','$updated_by','$status')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM akta_keluarga WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$alamat,$kepala_keluarga,$tgl_dibuat,$updated_by,$status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE akta_keluarga SET  alamat='$alamat', kepala_keluarga='$kepala_keluarga', 
        tgl_dibuat='$tgl_dibuat', updated_by=$updated_by, status='$status' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM akta_keluarga WHERE id='$id'";
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
        $sql = "DELETE FROM akta_keluarga WHERE id='$id'";
        $conn->query($sql);
    } 

    public function approve($id, $status, $no_kk) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE akta_keluarga SET status='$status', no_kk='$no_kk' WHERE id='$id'";
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

        $sql = "UPDATE akta_keluarga SET surat_akta='$file_awal' WHERE id='$id'";
        $conn->query($sql);
    }
}
?>
