<?php
require 'function.php';

//ambil id dari URL
$id = $_GET['id'];

//ambil query berdasarkan id
$mhs = Query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEtail Mahasiswa</title>
</head>

<body>
  <h3>Daftar Detail Mahasiswa</h3>

  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" width="50px"></li>
    <li><?= $mhs['nrp']; ?></li>
    <li><?= $mhs['nama']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['jurusan']; ?></li>
    <li><a href="">Ubah</a> || <a href="">Hapus</a></li>

  </ul>
</body>

</html>