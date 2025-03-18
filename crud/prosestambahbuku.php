<?php
include("koneksi.php"); // Koneksi ke database

// Ambil data dari form
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

// Query untuk menambahkan data ke database
$query = "INSERT INTO tb_buku (judul_buku, pengarang, tahun_terbit, kategori) 
          VALUES ('$judul', '$pengarang', '$tahun_terbit', '$kategori')";

$hasil = mysqli_query($conn, $query);

// Cek apakah data berhasil disimpan
if ($hasil) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan data!'); window.history.back();</script>";
}
?>
