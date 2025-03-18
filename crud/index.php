<?php
include("koneksi.php"); // Koneksi ke database
$query = "SELECT * FROM tb_buku";
$hasil = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
    </div>

    <div class="container">
        <a href="tambahbuku.php" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['pengarang']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td>
                        <a href="ubahbuku.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapusbuku.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
