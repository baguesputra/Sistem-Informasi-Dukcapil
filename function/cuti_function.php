<?php 
include 'config.php';

class cuti {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT cuti.id, cuti.id_pegawai, cuti.tanggal_awal, cuti.tanggal_akhir, cuti.status, cuti.keperluan, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket FROM pegawai join cuti on cuti.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on pegawai.golongan = golongan.id"); 
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

    public function tambah($id_pegawai, $tanggal_awal, $tanggal_akhir ,$status, $keperluan) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO cuti (id_pegawai, tanggal_awal, tanggal_akhir ,status, keperluan) 
        VALUES ('$id_pegawai', '$tanggal_awal', '$tanggal_akhir' ,'$status', '$keperluan')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM cuti WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $id_pegawai, $tanggal_awal, $tanggal_akhir ,$status, $keperluan)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE cuti SET id_pegawai='$id_pegawai', tanggal_awal='$tanggal_awal', tanggal_akhir='$tanggal_akhir', 
        status='$status', keperluan='$keperluan' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM jadwal WHERE id='$id'";
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
        $sql = "UPDATE cuti SET status='$status' WHERE id='$id'";
        $conn->query($sql);
    } 

    public function hapus($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "DELETE FROM cuti WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
