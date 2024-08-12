<?php
include '../../function/cuti_function.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cuti = new cuti();
    $cuti->hapus($id);
    header('location:index.php');
}