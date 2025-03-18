<?php
include("koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM tb_buku WHERE id_buku=$id";
mysqli_query($conn, $query);

header("Location: index.php");
?>
