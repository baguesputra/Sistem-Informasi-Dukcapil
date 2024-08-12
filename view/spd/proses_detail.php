<?php
include '../../function/surat_tugas_function.php';
if (isset($_POST['tambah'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $id_surat_tugas = $_POST['id_surat_tugas'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->tambah_detail($id_pegawai,$id_surat_tugas);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    // $id_pegawai = $_POST['id_pegawai'];
    $tujuan = $_POST['tujuan'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $rangka = $_POST['rangka'];
    $status = $_POST['status'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->update($id, $id_pegawai,$tujuan, $tanggal_awal, $tanggal_akhir, $rangka , $status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->hapus($id);
    header('location:index.php');
}