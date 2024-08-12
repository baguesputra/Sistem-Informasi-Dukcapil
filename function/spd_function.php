<?php 
include 'config.php';

class spd {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT spd.id, spd.id_pegawai,spd.tanggal_awal, spd.tanggal_akhir, spd.tujuan, spd.rangka, spd.status, spd.transportasi, spd.pembiayaan,
        pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket FROM spd join pegawai on spd.id_pegawai = pegawai.id join jabatan on jabatan.id = pegawai.jabatan join golongan on golongan.id = pegawai.golongan"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function pegawai() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket FROM pegawai join jabatan on jabatan.id = pegawai.jabatan join golongan on golongan.id = pegawai.golongan");   
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function detail_spd() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM detail_spd join pegawai on detail_spd.id_pegawai = pegawai.id"); 
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

    public function tambah($perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka, $transportasi, $pembiayaan , $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO spd (perintah,id_pegawai,tujuan, tanggal_awal, tanggal_akhir, rangka, transportasi, pembiayaan , status) 
        VALUES ('$perintah','$id_pegawai','$tujuan', '$tanggal_awal', '$tanggal_akhir', '$rangka', '$transportasi', '$pembiayaan' , '$status')";
        $conn->query($sql);
    } 

    public function tambah_spd($perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka, $transportasi, $pembiayaan , $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO spd (perintah,id_pegawai,tujuan, tanggal_awal, tanggal_akhir, rangka, transportasi, pembiayaan , status) 
        VALUES ('$perintah','$id_pegawai','$tujuan', '$tanggal_awal', '$tanggal_akhir', '$rangka', '$transportasi', '$pembiayaan' , '$status')";
        $conn->query($sql);
    } 

    public function tambah_detail($id_pegawai, $id_spd) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO detail_spd (id, id_spd, id_pegawai) 
        VALUES ('$id', '$id_spd', '$id_pegawai')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM spd WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 


    public function update($id,$perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka, $transportasi, $pembiayaan , $status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE spd SET perintah='$perintah',id_pegawai='$id_pegawai',tujuan='$tujuan', tanggal_awal='$tanggal_awal', 
        tanggal_akhir='$tanggal_akhir', rangka='$rangka', transportasi='$transportasi', pembiayaan='$pembiayaan' ,status='$status' WHERE id='$id'";
        $conn->query($sql);
    }

   

    public function approve($id, $status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE spd SET status='$status' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM spd WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus_detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM detail_spd WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
