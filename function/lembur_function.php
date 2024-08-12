<?php 
include 'config.php';

class lembur {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT lembur.id, lembur.total, lembur.tanggal, lembur.jam_awal, lembur.jam_akhir, 
        lembur.jumlah_jam, lembur.total,lembur.ket, pegawai.nama, pegawai.nik, jabatan.jabatan, golongan.golongan,
        golongan.tingkat, golongan.ket FROM pegawai join lembur on lembur.id_pegawai = pegawai.id join jabatan on pegawai.jabatan = jabatan.id join golongan on pegawai.golongan = golongan.id"); 
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

    public function tambah($id_pegawai, $tanggal, $jam_awal,  $jam_akhir, $jumlah_jam,$total, $ket) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO lembur (id_pegawai, tanggal, jam_awal,  jam_akhir, jumlah_jam,total, ket) 
        VALUES ('$id_pegawai', '$tanggal', '$jam_awal',  '$jam_akhir', '$jumlah_jam','$total', '$ket')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM lembur WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $id_pegawai, $tanggal, $jam_awal,  $jam_akhir, $jumlah_jam,$total, $ket)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE lembur SET id_pegawai='$id_pegawai', tanggal='$tanggal', jam_awal='$jam_awal',
        jam_akhir='$jam_akhir', jumlah_jam='$jumlah_jam', total='$total', ket='$ket' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM lembur WHERE id='$id'";
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
        $sql = "DELETE FROM lembur WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
