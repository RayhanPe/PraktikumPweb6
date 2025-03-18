<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>TAMBAH KOLEKSI BUKU PERPUSTAKAAN</h2>
    </div>

    <div class="container">
        <h3>Form Tambah Buku</h3>
        <form method="post" action="prosestambahbuku.php">
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-4">
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Buku" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-4">
                    <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-4">
                    <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-4">
                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
