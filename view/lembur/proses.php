<?php
include '../../function/lembur_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $tanggal = $_POST['tanggal'];
    $jam_awal = $_POST['jam_awal'];
    $jam_akhir = $_POST['jam_akhir'];
    $jumlah_jam = $_POST['jumlah_jam'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $lembur = new lembur();
    $lembur->tambah($id_pegawai, $tanggal, $jam_awal,  $jam_akhir, $jumlah_jam,$total, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $tanggal = $_POST['tanggal'];
    $jam_awal = $_POST['jam_awal'];
    $jam_akhir = $_POST['jam_akhir'];
    $jumlah_jam = $_POST['jumlah_jam'];
    $total = $_POST['total'];
    $ket = $_POST['ket'];
    $lembur = new lembur();
    $lembur->update($id,$id_pegawai, $tanggal, $jam_awal,  $jam_akhir, $jumlah_jam,$total, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $lembur = new lembur();
    $lembur->hapus($id);
    header('location:index.php');
}