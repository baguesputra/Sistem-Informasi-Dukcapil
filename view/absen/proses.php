<?php
include '../../function/absen_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tipe = $_POST['tipe'];
    $jam = $_POST['jam'];
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $absen = new absen();
    $absen->tambah($tgl, $id_pegawai, $tipe, $jam ,$ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tipe = $_POST['tipe'];
    $jam = $_POST['jam'];
    $id_pegawai = $_POST['id_pegawai'];
    $ket = $_POST['ket'];
    $absen = new absen();
    $absen->update($id, $tgl, $id_pegawai,$tipe, $jam ,$ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ver = '1';
    $absen = new absen();
    $absen->approve($id, $ver);
    header('location:index.php');
}