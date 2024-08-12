<?php
include '../../function/akta_kelahiran_function.php';

if (isset($_POST['upload'])) {
    $id = $_POST['id'];
    $surat_akta = $_POST['surat_akta'];
    $akta_kelahiran = new akta_kelahiran();
    $akta_kelahiran->upload($id,$surat_akta);
    header('location:index.php');
}