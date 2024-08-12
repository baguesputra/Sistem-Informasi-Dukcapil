<?php
include '../../function/pengeluaran_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    $ket = $_POST['ket'];
    $pengeluaran = new pengeluaran();
    $pengeluaran->tambah($tgl,$jumlah, $bayar, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    $ket = $_POST['ket'];
    $pengeluaran = new pengeluaran();
    $pengeluaran->update($id,$tgl,$jumlah, $bayar, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pengeluaran = new pengeluaran();
    $pengeluaran->hapus($id);
    header('location:index.php');
}