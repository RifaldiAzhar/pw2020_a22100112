<?php 
// Koneksi ke DB dan pilih Database
$conn = mysqli_connect('localhost', 'root','','pw_a22100112');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// Ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[]= $row;


}


// Tampung ke variabel mahasiswa
$mahasiswa = $rows;

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <h3>Daftar Mahasiswa</h3>
    <table border="1" cellpading="10 cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i=1;
     foreach($mahasiswa as $m): ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['Ganbar']; ?>" width="60"></td>
      <td><?= $m['NIM']; ?></td>
      <td><?= $m['Nama']; ?></td>
      <td><?= $m['Email']; ?></td>
      <td><?= $m['Jurusan']; ?></td>
      <td>
        <a href="">ubah</a> / <a href="">hapus</a> 
      
      </td>
    </tr>
    <?php endforeach; ?>
  

    </table>
    
  </body>
</html>