<?php
include 'db.php';
$db_hapus = new db();
$id = $_GET['id'];
$db_hapus->hapus($id);
header('Location: tampil.php');


?>