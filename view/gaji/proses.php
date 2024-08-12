<?php
include '../../function/gajih_function.php';
if (isset($_POST['tambah'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $gajih = new gajih();
    $gajih->tambah($id_pegawai, $gaji, $tunjangan,  $total, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $gajih = new gajih();
    $gajih->update($id,$id_pegawai, $gaji, $tunjangan,  $total, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $gajih = new gaji();
    $gajih->hapus($id);
    header('location:index.php');
}