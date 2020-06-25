<?php
require 'function.php';
$mahasiswa = Query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Mahasiswa Latihan 2</h3>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Mahasiswa</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="50px"></td>
        <td><?= $mhs['nama']; ?></td>
        <td><a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>