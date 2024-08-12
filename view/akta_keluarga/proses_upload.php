<?php
include '../../function/akta_keluarga_function.php';

if (isset($_POST['upload'])) {
    $id = $_POST['id'];
    $surat_akta = $_POST['surat_akta'];
    $akta_keluarga = new akta_keluarga();
    $akta_keluarga->upload($id,$surat_akta);
    header('location:index.php');
}