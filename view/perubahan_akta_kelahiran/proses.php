<?php
include '../../function/perubahan_akta_kelahiran_function.php';
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
    $perubahan_akta_kelahiran = new perubahan_akta_kelahiran();
    $perubahan_akta_kelahiran->tambah($no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $no_akta = $_POST['no_akta'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $tgl_pengubahan = $_POST['tgl_pengubahan'];
    $perubahan = $_POST['perubahan'];
    $alasan = $_POST['alasan'];
    $akta_awal = $_FILES['akta_awal'];
    $akta_perubahan = $_FILES['akta_perubahan'];
    $dokumen = $_FILES['dokumen'];
    $updated_by = $_POST['updated_by'];
    $old_dokumen = $_POST['old_dokumen'];
    $old_awal = $_POST['old_awal'];
    $old_perubahan = $_POST['old_perubahan'];
    $status = $_POST['status'];
    $perubahan_akta_kelahiran = new perubahan_akta_kelahiran();
    $perubahan_akta_kelahiran->update($id,$no_akta,$tgl_pengajuan,$tgl_pengubahan,$perubahan,$alasan,$akta_awal,$akta_perubahan,$dokumen,$updated_by,$status);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = '1';
    $perubahan_akta_kelahiran = new perubahan_akta_kelahiran();
    $perubahan_akta_kelahiran->approve($id, $status);
    header('location:index.php');
}