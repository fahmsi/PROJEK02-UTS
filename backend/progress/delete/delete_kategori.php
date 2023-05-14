<?php
require_once '../../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM tipe_motor WHERE id = ?";
$statement = $dbh->prepare($query);
$statement->execute([$id]);

header('location:../../pages/kategori.php');
?>