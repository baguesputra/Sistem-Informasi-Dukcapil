<?php 
include 'config.php';

class kritik {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM kritik"); 
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

    public function tambah($tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO kritik (tgl, nama, panggilan, instansi, alamat, kota, email, no, kritik) VALUES 
        ('$tgl', '$nama', '$panggilan', '$instansi', '$alamat', '$kota', '$email', '$no', '$kritik')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM kritik WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE kritik SET tgl='$tgl', nama='$nama', panggilan='$panggilan', instansi='$instansi', 
        alamat='$alamat', kota='$kota' ,email='$email',no='$no', kritik='$kritik' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM kritik WHERE id='$id'";
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
        $sql = "DELETE FROM kritik WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
