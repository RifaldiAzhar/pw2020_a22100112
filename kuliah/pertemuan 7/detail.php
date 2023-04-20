<?php 
require 'functions.php'; 

//ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
 $m = query("SELECT * FROM mahasiswa WHERE id=$id");
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiwa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
    <ul>
      <li><img src="img/<?= $m['Ganbar']; ?>" "width="60""></li>
      <li>Nim : <?= $m ['NIM']; ?></li>
      <li>Nama : <?= $m['Nama']; ?></li>
      <li>Email : <?= $m['Email']; ?></li>
      <li>Jurusan : <?= $m['Jurusan']; ?></li>

      <li><a href="">ubah</a></li>/<a href="">hapus</a>
      <li></li><a href="latihan3.php">Kembali ke daftar Mahasiswa</a>

    </ul>
  
</body>
</html>