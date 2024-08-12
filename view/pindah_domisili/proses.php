<?php
include '../../function/pindah_domisili_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $id_penduduk = $_POST['id_penduduk'];
    $tanggal = $_POST['tanggal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $alasan = $_POST['alasan'];
    $surat_rt = $_POST['surat_rt'];
    $surat_capil = $_POST['surat_capil'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_kk = $_POST['berkas_kk'];
    $surat_domisili = $_POST['surat_domisili'];
    $status = $_POST['status'];
    $pindah_domisili = new pindah_domisili();
    $pindah_domisili->tambah($id_penduduk,$tanggal, $alamat_tujuan, $alasan,$surat_rt, $surat_capil, $berkas_ktp, $berkas_kk, $surat_domisili,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_penduduk = $_POST['id_penduduk'];
    $tanggal = $_POST['tanggal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $alasan = $_POST['alasan'];
    $surat_rt = $_POST['surat_rt'];
    $surat_capil = $_POST['surat_capil'];
    $berkas_ktp = $_POST['berkas_ktp'];
    $berkas_kk = $_POST['berkas_kk'];
    $surat_domisili = $_POST['surat_domisili'];
    $status = $_POST['status'];
    $pindah_domisili = new pindah_domisili();
    $pindah_domisili->update($id,$id_penduduk,$tanggal,$surat_rt, $surat_capil, $berkas_surat, $berkas_ktp, $berkas_kk,$status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $pindah_domisili = new pindah_domisili();
    $pindah_domisili->approve($id, $status);
    header('location:index.php');
}