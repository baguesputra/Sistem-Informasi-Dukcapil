<?php
include '../../function/user_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_penduduk = $_POST['id_penduduk'];
    $level = $_POST['level'];
    $user = new user();
    $user->tambah_pegawai($username, $password, $id_penduduk, $level);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_penduduk = $_POST['id_penduduk'];
    $level = $_POST['level'];
    $user = new user();
    $user->update_pegawai($id, $username, $password, $id_penduduk, $level);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = new user();
    $user->hapus_pegawai($id);
    header('location:index.php');
}