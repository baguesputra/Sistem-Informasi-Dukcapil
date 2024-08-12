<?php
include '../../function/spd_function.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $spd = new spd();
    $spd->hapus($id);
    header('location:index.php');
}