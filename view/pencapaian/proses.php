<?php
include '../../function/pencapaian_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $capaian = $_POST['capaian'];
    $tgl = $_POST['tgl'];
    $ket = $_POST['ket'];
    $tempat = $_POST['tempat'];
    $foto = $_POST['foto'];
    $pencapaian = new pencapaian();
    $pencapaian->tambah($id_pegawai, $tgl,$capaian, $tempat,$ket ,$foto);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $capaian = $_POST['capaian'];
    $ket = $_POST['ket'];
    $foto = $_POST['foto'];
    $pencapaian = new pencapaian();
    $pencapaian->update($id,$id_pegawai, $tgl,$capaian, $tempat,$ket ,$foto);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ver = '1';
    $pencapaian = new pencapaian();
    $pencapaian->approve($id, $ver);
    header('location:index.php');
}