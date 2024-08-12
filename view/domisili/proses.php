<?php
include '../../function/domisili_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $id_penduduk = $_POST['id_penduduk'];
    $tanggal = $_POST['tanggal'];
    $surat_rt = $_POST['surat_rt'];
    $surat_capil = $_POST['surat_capil'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_kk = $_POST['berkas_kk'];
    $status = $_POST['status'];
    $domisili = new domisili();
    $domisili->tambah($id_penduduk,$tanggal,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_penduduk = $_POST['id_penduduk'];
    $tanggal = $_POST['tanggal'];
    $surat_rt = $_POST['surat_rt'];
    $surat_capil = $_POST['surat_capil'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_kk = $_POST['berkas_kk'];
    $status = $_POST['status'];
    $domisili = new domisili();
    $domisili->update($id,$id_penduduk,$tanggal,$surat_rt, $surat_capil, $berkas_surat, $berkas_ktp, $berkas_kk,$status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $domisili = new domisili();
    $domisili->approve($id, $status);
    header('location:index.php');
}