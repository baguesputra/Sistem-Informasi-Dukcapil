<?php
include '../../function/jabatan_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];
    $ket = $_POST['ket'];
   
    $jabatan = new jabatan();
    $jabatan->tambah($jabatan, $ket);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];
    $ket = $_POST['ket'];
    $jabatan = new jabatan();
    $jabatan->update($id, $jabatan, $ket);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $jabatan = new jabatan();
    $jabatan->hapus($id);
    header('location:index.php');
}