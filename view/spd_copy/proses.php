<?php
include '../../function/spd_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tujuan = $_POST['tujuan'];
    $kota = $_POST['kota'];
    $pegawai = $_POST['pegawai'];
    $ver = $_POST['ver'];
    $spd = new spd();
    $spd->tambah($tgl, $tujuan, $kota ,$pegawai, $ver);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tujuan = $_POST['tujuan'];
    $kota = $_POST['kota'];
    $pegawai = $_POST['pegawai'];
    $ver = $_POST['ver'];
    $spd = new spd();
    $spd->update($id, $tgl, $tujuan, $kota ,$pegawai,$ver);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ver = '1';
    $spd = new spd();
    $spd->approve($id, $ver);
    header('location:index.php');
}