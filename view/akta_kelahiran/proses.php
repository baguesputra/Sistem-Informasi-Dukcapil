<?php
include '../../function/akta_kelahiran_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $no_akta = $_POST['no_akta'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $tempat = $_POST['tempat'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_kelahiran = new akta_kelahiran();
    $akta_kelahiran->tambah($no_akta,$nama,$jk,$tgl_lahir,$tgl_dibuat,$tempat,$ayah,$ibu,$updated_by,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    // $no_akta = $_POST['no_akta'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $tempat = $_POST['tempat'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_kelahiran = new akta_kelahiran();
    $akta_kelahiran->update($id,$nama,$jk,$tgl_lahir,$tgl_dibuat,$tempat,$ayah,$ibu,$updated_by,$status);
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

$a=1;
function getAbjad($a) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $a; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

$b=12;
function getNumber($b) {
    $characters = '0123456789';
    $randomString = '';
 
    for ($i = 0; $i < $b; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
$no_akta_auto = getName($n) .".". getAbjad($a) . "/" . getAbjad($a) . "-" . getNumber($b) ;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $no_akta = $no_akta_auto;
    $akta_kelahiran = new akta_kelahiran();
    $akta_kelahiran->approve($id, $status, $no_akta);
    header('location:index.php');
}


