<?php
include '../../function/akta_keluarga_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $no_kk = $_POST['no_kk'];
    $alamat = $_POST['alamat'];
    $alamat = $_POST['alamat'];
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_keluarga = new akta_keluarga();
    $akta_keluarga->tambah($no_kk,$alamat,$kepala_keluarga,$tgl_dibuat,$updated_by,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    // $no_kk = $_POST['no_kk'];
    $alamat = $_POST['alamat'];
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $tgl_dibuat = $_POST['tgl_dibuat'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $akta_keluarga = new akta_keluarga();
    $akta_keluarga->update($id,$alamat,$kepala_keluarga,$tgl_dibuat,$updated_by,$status);
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

$b=16;
function getNumber($b) {
    $characters = '0123456789';
    $randomString = '';
 
    for ($i = 0; $i < $b; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
$no_kk_auto = getNumber($b) ;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $no_kk = $no_kk_auto;
    $akta_keluarga = new akta_keluarga();
    $akta_keluarga->approve($id, $status, $no_kk);
    header('location:index.php');
}