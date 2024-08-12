<?php 
include 'config.php';

class pegawai {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT pegawai.id, pegawai.nama, pegawai.nik, pegawai.alamat, pegawai.email, pegawai.no, jabatan.jabatan FROM pegawai join jabatan on jabatan.id = pegawai.jabatan"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function jabatan() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM jabatan"); 
        while($d = mysqli_fetch_array($data)){
            $view[] = $d;
        } 
        return $view; 
    } 

    public function golongan() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM golongan"); 
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

    public function tambah($nik, $nama,$tgl_lahir,$agama,$jk,$alamat,$email,$jabatan, $golongan,$no) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "INSERT INTO pegawai (nik, nama, tgl_lahir, jk, agama, alamat, email, jabatan, golongan,no) VALUES ('$nik', '$nama',
                '$tgl_lahir', '$jk','$agama', '$alamat', '$email', '$jabatan', '$golongan','$no')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pegawai WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id, $nik, $nama,$tgl_lahir,$agama,$jk,$alamat,$email,$jabatan, $golongan,$no)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE pegawai SET nik='$nik', nama='$nama', tgl_lahir='$tgl_lahir', jk='$jk', agama='$agama', 
        alamat='$alamat',email='$email',jabatan='$jabatan', golongan='$golongan',no='$no' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM pegawai WHERE id='$id'";
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
        $sql = "DELETE FROM pegawai WHERE id='$id'";
        $conn->query($sql);
    } 
}
?>
