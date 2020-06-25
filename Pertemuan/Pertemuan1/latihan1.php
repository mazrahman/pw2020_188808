<?php
//Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "pw_043040023");

//Query Isi Tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//Ubah Data ke dalam Bentuk Array
//$row = mysqli_fetch_row($result); //Array Numerik
//$row = mysqli_fetch_assoc($result); //Array Asosiative
//$row = mysqli_fetch_array($result); //Array Keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  //echo $row['nama']; //Kita Buat Satu Persatu
  $rows[] = $row;
}
//var_dump($rows);

//Tampung Ke Variabel Mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama Mahasiswa</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="50px"></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td><a href="">Ubah</a> || <a href="">Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>