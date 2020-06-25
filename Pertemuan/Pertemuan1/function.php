<?php
//Buat Function Koneksi
function Koneksi()
{
  return mysqli_connect("localhost", "root", "", "pw_043040023");
}

//function Query
function Query($query)
{
  $conn = Koneksi();

  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    //echo $row['nama']; //Kita Buat Satu Persatu
    $rows[] = $row;
  }
  return $rows;
}
