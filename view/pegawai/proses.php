<?php
include '../../function/pegawai_function.php';
if (isset($_POST['tambah'])) {
    // $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $golongan = $_POST['golongan'];
    $no = $_POST['no'];
    $pegawai = new pegawai();
    $pegawai->tambah($nik, $nama, $tgl_lahir, $jk, $agama, $alamat, $email,$jabatan, $golongan,$no);
    header('location:index.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $golongan = $_POST['golongan'];
    $no = $_POST['no'];
    $pegawai = new pegawai();
    $pegawai->update($id, $nik, $nama, $tgl_lahir, $jk, $agama, $alamat, $email,$jabatan, $golongan,$no);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pegawai = new pegawai();
    $pegawai->hapus($id);
    header('location:index.php');
}