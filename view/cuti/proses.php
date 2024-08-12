<?php
include '../../function/cuti_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $status = $_POST['status'];
    $keperluan = $_POST['keperluan'];
    $cuti = new cuti();
    $cuti->tambah($id_pegawai, $tanggal_awal, $tanggal_akhir ,$status, $keperluan);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $status = $_POST['status'];
    $keperluan = $_POST['keperluan'];
    $cuti = new cuti();
    $cuti->update($id, $id_pegawai, $tanggal_awal, $tanggal_akhir ,$status, $keperluan);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $cuti = new cuti();
    $cuti->approve($id, $status);
    header('location:index.php');
}