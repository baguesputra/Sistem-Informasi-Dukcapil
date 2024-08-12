<?php 
include 'config.php';

class akta_perkawinan {

    public function index() 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $data=mysqli_query($conn,"SELECT * FROM akta_perkawinan"); 
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

    public function tambah($no,$nama_pria,$nama_wanita,$tgl_nikah,$tempat_nikah,$tgl_dibuat, $berkas_kk,$berkas_skd,$berkas_skp,$berkas_ktp,$berkas_photo,$berkas_akkel,$updated_by,$status) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();

        //Proses Penyimpanan Berkas
        $namaFile = $_FILES['berkas_kk']['name'];
        $namaSementara = $_FILES['berkas_kk']['tmp_name'];
        $dirUpload = "../../arsip/akta_perkawinan/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $file_kk = $namaFile;

        $namaFile2 = $_FILES['berkas_skd']['name'];
        $namaSementara2 = $_FILES['berkas_skd']['tmp_name'];
        $dirUpload2 = "../../arsip/akta_perkawinan/";
        $terupload2 = move_uploaded_file($namaSementara2, $dirUpload2.$namaFile2);

        $file_skd = $namaFile2;

        $namaFile3 = $_FILES['berkas_skp']['name'];
        $namaSementara3 = $_FILES['berkas_skp']['tmp_name'];
        $dirUpload3 = "../../arsip/akta_perkawinan/";
        $terupload3 = move_uploaded_file($namaSementara3, $dirUpload3.$namaFile3);

        $file_skp = $namaFile3;

        $namaFile4 = $_FILES['berkas_ktp']['name'];
        $namaSementara4 = $_FILES['berkas_ktp']['tmp_name'];
        $dirUpload4 = "../../arsip/akta_perkawinan/";
        $terupload4 = move_uploaded_file($namaSementara4, $dirUpload4.$namaFile4);

        $file_ktp = $namaFile4;


        $namaFile6 = $_FILES['berkas_photo']['name'];
        $namaSementara6 = $_FILES['berkas_photo']['tmp_name'];
        $dirUpload6 = "../../arsip/akta_perkawinan/";
        $terupload6 = move_uploaded_file($namaSementara6, $dirUpload6.$namaFile6);

        $file_photo = $namaFile6;

        $namaFile7 = $_FILES['berkas_akkel']['name'];
        $namaSementara7 = $_FILES['berkas_akkel']['tmp_name'];
        $dirUpload7 = "../../arsip/akta_perkawinan/";
        $terupload7 = move_uploaded_file($namaSementara7, $dirUpload7.$namaFile7);

        $file_dakkel = $namaFile7;

        //Proses Penyimpanan data ke database
        $sql = "INSERT INTO akta_perkawinan 
        (no,nama_pria,nama_wanita,tgl_nikah,tempat_nikah,tgl_dibuat, berkas_kk,berkas_skd,berkas_skp,berkas_ktp,berkas_photo,berkas_akkel,updated_by,status) 
        VALUES 
        ('$no','$nama_pria','$nama_wanita','$tgl_nikah','$tempat_nikah','$tgl_dibuat', '
        $file_kk','$file_skd','$file_skp','$file_ktp','$file_photo','$file_akkel','$updated_by','$status')";
        $conn->query($sql);
    } 


    function edit($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM akta_perkawinan WHERE id='$id'";
        $bind = $conn->query($sql);
        while ($obj = $bind->fetch_object()) {
        $baris = $obj;
        }
        return $baris;
    } 

    public function update($id,$nama_pria,$nama_wanita,$tgl_nikah,$tempat_nikah,$tgl_dibuat,$updated_by,$status)
    {
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE akta_perkawinan SET  nama_pria='$nama_pria', nama_wanita='$nama_wanita', tgl_nikah='$tgl_nikah'
        , tempat_nikah='$tempat_nikah', tgl_dibuat='$tgl_dibuat', status='$status' WHERE id='$id'";
        $conn->query($sql);
    }

    function detail($id) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "SELECT * FROM akta_perkawinan WHERE id='$id'";
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
        $sql = "DELETE FROM akta_perkawinan WHERE id='$id'";
        $conn->query($sql);
    } 

    public function approve($id, $status, $no) 
    { 
        $koneksi = new koneksi();
        $conn =  $koneksi->get_connection();
        $sql = "UPDATE akta_perkawinan SET status='$status', no='$no' WHERE id='$id'";
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

        $sql = "UPDATE akta_perkawinan SET surat_akta='$file_awal' WHERE id='$id'";
        $conn->query($sql);
    }
}
?>
