<?php 
include 'config.php';

class pencapaian {

   

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id as pegawai_id, pencapaian.id, pencapaian.id_pegawai, pencapaian.tgl, pencapaian.tempat,pencapaian.capaian, pencapaian.foto, pencapaian.ket, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket as keterangan FROM pencapaian join pegawai on pencapaian.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on pegawai.golongan = golongan.id"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function pegawai() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM pegawai"); 
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

    public function tambah($id_pegawai, $tgl,$capaian, $tempat,$ket ,$foto) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        $namaFile = $_FILES['foto']['name'];
        $namaSementara = $_FILES['foto']['tmp_name'];
        $dirUpload = "../../arsip/pencapaian/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_awal = $namaFile;

        $sql = "INSERT INTO pencapaian (id_pegawai, tgl,capaian, tempat,ket ,foto) 
        VALUES ('$id_pegawai', '$tgl','$capaian', '$tempat','$ket' ,'$file_awal')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pencapaian WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $id_pegawai, $tgl,$capaian, $tempat,$ket ,$foto)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pencapaian SET capaian='$capaian',tgl='$tgl',tempat='$tempat', id_pegawai='$id_pegawai', ket='$ket', foto='$foto' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pencapaian WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()){
        $baris = $obj;
        }
        return $baris;
    } 

    public function approve($id, $ver) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pencapaian SET ver='$ver' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM pencapaian WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
