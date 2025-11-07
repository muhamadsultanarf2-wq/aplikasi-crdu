<?php
include('config/koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Tambah Data Mahasiswa</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
