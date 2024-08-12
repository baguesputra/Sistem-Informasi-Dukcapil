<?php
include '../../function/akta_perkawinan_function.php';

if (isset($_POST['upload'])) {
    $id = $_POST['id'];
    $surat_akta = $_POST['surat_akta'];
    $akta_perkawinan = new akta_perkawinan();
    $akta_perkawinan->upload($id,$surat_akta);
    header('location:index.php');
}