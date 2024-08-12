<?php
include '../../function/surat_tugas_function.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $surat_tugas = new surat_tugas();
    $surat_tugas->hapus($id);
    header('location:index.php');
}