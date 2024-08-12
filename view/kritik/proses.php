<?php
include '../../function/kritik_function.php';
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
    $kritik = $_POST['kritik'];
    $critic = new kritik();
    $critic->tambah($tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik);
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
    $kritik = $_POST['kritik'];
    $critic = new kritik();
    $critic->update($id, $tgl, $nama, $panggilan, $instansi, $alamat, $kota, $email, $no, $kritik);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $kritik = new kritik();
    $kritik->hapus($id);
    header('location:index.php');
}