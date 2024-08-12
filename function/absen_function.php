<?php 
include 'config.php';

class absen {

   

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id as id_pegawai, absen.id, absen.tgl, absen.ket, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket as keterangan FROM absen join pegawai on absen.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on pegawai.golongan = golongan.id"); 
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

    public function tambah($tgl, $id_pegawai, $tipe, $jam  ,$ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO absen (tgl, id_pegawai, tipe, jam ,ket) 
        VALUES ('$tgl', '$id_pegawai', '$tipe', '$jam' ,'$ket')";
        $conn->query($sql);
    } 

     public function masuk($id_pegawai, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        date_default_timezone_set('Asia/Manila');
        $tgl = date('Y-m-d');
        $jam = date("h:i:sa");
        $tipe = 1;
        $sql = "INSERT INTO absen (tgl, id_pegawai, tipe, jam ,ket) 
        VALUES ('$tgl', '$id_pegawai', '$tipe', '$jam' ,'$ket')";
        $conn->query($sql);
    } 

    public function keluar($id_pegawai, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        date_default_timezone_set('Asia/Manila');
        $tgl = date('Y-m-d');
        $jam = date("h:i:sa");
        $tipe = 2;
        $sql = "INSERT INTO absen (tgl, id_pegawai, tipe, jam ,ket) 
        VALUES ('$tgl', '$id_pegawai', '$tipe', '$jam' ,'$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM absen WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $tgl, $id_pegawai, $tipe, $jam  ,$ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE absen SET tgl='$tgl', id_pegawai='$id_pegawai', tipe='$tipe', jam='$jam',ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM absen WHERE id='$id'";
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
        $sql = "UPDATE absen SET ver='$ver' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM absen WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
