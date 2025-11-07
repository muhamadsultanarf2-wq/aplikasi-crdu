<?php
include 'include/configkoneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <h2 class="text-center mb-4">Data Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Data</a>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['nim']}</td>
                  <td>{$row['jurusan']}</td>
                  <td>
                    <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                  </td>
                </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
