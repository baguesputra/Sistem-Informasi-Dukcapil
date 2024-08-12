<?php
include '../../function/akta_perkawinan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $no = $_POST['no'];
    $nama_pria = $_POST['nama_pria'];
    $nama_wanita = $_POST['nama_wanita'];
    $tgl_nikah = $_POST['tgl_nikah'];
    $tempat_nikah = $_POST['tempat_nikah'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $berkas_kk = $_POST['berkas_kk'];
    $berkas_skd = $_POST['berkas_skd'];
    $berkas_skp = $_POST['berkas_skp'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_photo = $_POST['berkas_photo'];
    $berkas_akkel = $_POST['berkas_akkel'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_perkawinan = new akta_perkawinan();
    $akta_perkawinan->tambah($no,$nama_pria,$nama_wanita,$tgl_nikah,$tempat_nikah,$tgl_dibuat,$berkas_kk,$berkas_skd,$berkas_skp,$berkas_ktp,$berkas_photo,$berkas_akkel,$updated_by,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    // $no = $_POST['no'];
    $nama_pria = $_POST['nama_pria'];
    $nama_wanita = $_POST['nama_wanita'];
    $tgl_nikah = $_POST['tgl_nikah'];
    $tempat_nikah = $_POST['tempat_nikah'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $berkas_kk = $_POST['berkas_kk'];
    $berkas_skd = $_POST['berkas_skd'];
    $berkas_skp = $_POST['berkas_skp'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_photo = $_POST['berkas_photo'];
    $berkas_akkel = $_POST['berkas_akkel'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_perkawinan = new akta_perkawinan();
    $akta_perkawinan->update($id,$nama_pria,$nama_wanita,$tgl_nikah,$tempat_nikah,$tgl_dibuat,$berkas_kk,$berkas_skd,$berkas_skp,$berkas_ktp,$berkas_photo,$berkas_akkel,$updated_by,$status);
    header('location:index.php');
}


$n=4;
function getName($n) {
    $characters = '0123456789';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

$a=2;
function getAbjad($a) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $a; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

$c=4;
function getAbjad2($c) {
    $characters = '0123456789';
    $randomString = '';
 
    for ($i = 0; $i < $c; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

$b=8;
function getNumber($b) {
    $characters = '0123456789';
    $randomString = '';
 
    for ($i = 0; $i < $b; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
$no_auto = getName($n) ."-". getAbjad($a) . "-" . getNumber($b) . "-" . getNumber($c) ;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $no = $no_auto;
    $akta_perkawinan = new akta_perkawinan();
    $akta_perkawinan->approve($id, $status, $no);
    header('location:index.php');
}