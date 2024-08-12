<?php
include '../../function/pengaduan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $nama = $_POST['nama'];
    $panggilan = $_POST['panggilan'];
    $instansi = $_POST['instansi'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $pengadu = $_POST['pengaduan'];
    $pengaduan = new pengaduan();
    $pengaduan->tambah($tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $pengadu);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $nama = $_POST['nama'];
    $panggilan = $_POST['panggilan'];
    $instansi = $_POST['instansi'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $pengadu = $_POST['pengaduan'];
    $pengaduan = new pengaduan();
    $pengaduan->update($id, $tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $pengadu);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pengaduan = new pengaduan();
    $pengaduan->hapus($id);
    header('location:index.php');
}