<?php
include '../../function/surat_tugas_function.php';
if (isset($_POST['tambah'])) {
    $perintah = $_POST['perintah'];
    $id_pegawai = $_POST['id_pegawai'];
    $tujuan = $_POST['tujuan'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $rangka = $_POST['rangka'];
    $transportasi = $_POST['transportasi'];
    $pembiayaan = $_POST['pembiayaan'];
    $status = $_POST['status'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->tambah($perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka, $transportasi, $pembiayaan , $status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $perintah = $_POST['perintah'];
    $id_pegawai = $_POST['id_pegawai'];
    $tujuan = $_POST['tujuan'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $rangka = $_POST['rangka'];
    $transportasi = $_POST['transportasi'];
    $pembiayaan = $_POST['pembiayaan'];
    $status = $_POST['status'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->update($id, $perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka,$transportasi, $pembiayaan , $status);
    header('location:index.php');
}

if (isset($_POST['approve'])) {
    $id = $_POST['id'];
    $status= '1';
    $surat_tugas = new surat_tugas();
    $surat_tugas->approve($id, $status);

    $id_pegawai = $_POST['id_pegawai'];
    $perintah = $_POST['perintah'];
    $tujuan = $_POST['tujuan'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $rangka = $_POST['rangka'];
    $transportasi = $_POST['transportasi'];
    $pembiayaan = $_POST['pembiayaan'];
    $status = $_POST['status'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->tambah_spd($perintah,$id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka, $transportasi, $pembiayaan , $status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status= '1';
    $surat_tugas = new surat_tugas();
    $surat_tugas->approve($id, $status);
    header('location:index.php');
}