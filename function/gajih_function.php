<?php 
include 'config.php';

class gajih {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT gajih.id, gajih.total, gajih.tunjangan, gajih.gaji, gajih.ket, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket FROM gajih join pegawai on gajih.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on golongan.id = pegawai.golongan"); 
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

    public function bukti_gaji()
    {
        
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id,gajih.total, gajih.tunjangan, gajih.gaji, gajih.ket, gajih.id_pegawai, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan, golongan.tingkat, golongan.ket FROM pegawai join gajih on gajih.id_pegawai = pegawai.id join jabatan on jabatan.id = pegawai.jabatan join golongan on golongan.id = pegawai.golongan"); 
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

    public function tambah($id_pegawai, $gaji, $tunjangan,  $total, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO gajih (id_pegawai,gaji,tunjangan,total,ket) VALUES ('$id_pegawai','$gaji','$tunjangan','$total','$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM gajih WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $id_pegawai, $gaji, $tunjangan, $total, $ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE gajih SET id_pegawai='$id_pegawai', gaji='$gaji', tunjangan='$tunjangan', 
        total='$total', ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM gajih WHERE id='$id'";
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
        $sql = "DELETE FROM gajih WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
