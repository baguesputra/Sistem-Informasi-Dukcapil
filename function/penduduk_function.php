<?php 
include 'config.php';

class penduduk {

    public function index() 
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

    public function tambah($no_penduduk,$nama,$jk,$tempat_lahir,$tgl_lahir,$alamat,$no) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO penduduk (no_penduduk,nama,jk,tempat_lahir,tgl_lahir,alamat,no) VALUES 
                ('$no_penduduk','$nama','$jk','$tempat_lahir','$tgl_lahir','$alamat','$no')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM penduduk WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$no_penduduk,$nama,$jk,$tempat_lahir,$tgl_lahir,$alamat,$no)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE penduduk SET no_penduduk='$no_penduduk', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', 
        tgl_lahir='$tgl_lahir', alamat='$alamat', no='$no' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM penduduk WHERE id='$id'";
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
        $sql = "DELETE FROM penduduk WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
