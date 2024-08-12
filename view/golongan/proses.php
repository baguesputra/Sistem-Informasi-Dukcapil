<?php
include '../../function/golongan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $golongan = $_POST['golongan'];
    $tingkat = $_POST['tingkat'];
    $ket = $_POST['ket'];
   
    $golongan = new golongan();
    $golongan->tambah($golongan, $tingkat,$ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $golongan = $_POST['golongan'];
    $tingkat = $_POST['tingkat'];
    $ket = $_POST['ket'];
    $golongan = new golongan();
    $golongan->update($id, $golongan, $tingkat,$ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $golongan = new golongan();
    $golongan->hapus($id);
    header('location:index.php');
}