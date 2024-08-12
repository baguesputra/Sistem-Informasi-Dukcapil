<?php
include '../function/pengaduan_function.php';
if (isset($_POST['pengaduan'])) {
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
    header('location:pengaduan.php');
}

if (isset($_POST['kritik'])) {
    $tgl = $_POST['tgl'];
    $nama = $_POST['nama'];
    $panggilan = $_POST['panggilan'];
    $instansi = $_POST['instansi'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $kritik = $_POST['kritik'];
    $critic = new kritik();
    $critic->update($tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik);
    header('location:kritik.php');
}
