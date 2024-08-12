<?php
include '../function/absen_function.php';
if (isset($_POST['masuk'])) {
    // $id = $_POST['id'];
  
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $absen = new absen();
    $absen->masuk($id_pegawai ,$ket);
    header('location:index.php');
}

if (isset($_POST['keluar'])) {
    // $id = $_POST['id'];
 
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $absen = new absen();
    $absen->keluar($id_pegawai, $ket);
    header('location:index.php');
}

