<?php
include '../function/kritik_function.php';

if (isset($_POST['kirim'])) {
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
    $critic->tambah($tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik);
    header('location:kritik.php');
}
