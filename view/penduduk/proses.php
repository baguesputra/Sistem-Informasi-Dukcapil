<?php
include '../../function/penduduk_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $no_penduduk = $_POST['no_penduduk'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $penduduk = new penduduk();
    $penduduk->tambah($no_penduduk,$nama,$jk,$tempat_lahir,$tgl_lahir,$alamat,$no);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $no_penduduk = $_POST['no_penduduk'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $penduduk = new penduduk();
    $penduduk->update($id,$no_penduduk,$nama,$jk,$tempat_lahir,$tgl_lahir,$alamat,$no);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $penduduk = new penduduk();
    $penduduk->hapus($id);
    header('location:index.php');
}