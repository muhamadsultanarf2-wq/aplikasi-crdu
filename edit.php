<?php
include('config/koneksi.php');
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id='$id'");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container">
        <h2>Edit Data Mahasiswa</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $data['nim'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>