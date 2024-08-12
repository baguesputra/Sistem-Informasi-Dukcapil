<?php
include '../../function/perubahan_akta_keluarga_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $no_akta = $_POST['no_akta'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $tgl_pengubahan = $_POST['tgl_pengubahan'];
    $perubahan = $_POST['perubahan'];
    $alasan = $_POST['alasan'];
    $akta_awal = $_POST['akta_awal'];
    $akta_perubahan = $_POST['akta_perubahan'];
    $dokumen = $_POST['dokumen'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $perubahan_akta_keluarga = new perubahan_akta_keluarga();
    $perubahan_akta_keluarga->tambah($no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $no_akta = $_POST['no_akta'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $tgl_pengubahan = $_POST['tgl_pengubahan'];
    $perubahan = $_POST['perubahan'];
    $alasan = $_POST['alasan'];
    $akta_awal = $_POST['akta_awal'];
    $akta_perubahan = $_POST['akta_perubahan'];
    $dokumen = $_POST['dokumen'];
    $updated_by = $_POST['updated_by'];
    $status = $_POST['status'];
    $perubahan_akta_keluarga = new perubahan_akta_keluarga();
    $perubahan_akta_keluarga->update($id,$no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $perubahan_akta_keluarga = new perubahan_akta_keluarga();
    $perubahan_akta_keluarga->approve($id, $status);
    header('location:index.php');
}