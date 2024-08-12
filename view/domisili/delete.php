<?php
include '../../function/domisili_function.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $domisili = new domisili();
    $domisili->hapus($id);
    header('location:index.php');
}