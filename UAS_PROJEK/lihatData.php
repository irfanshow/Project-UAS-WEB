<?php
echo "<h1>Data Tabel Ilkom</h3>";
echo "<table border=1px>";
    $host = mysqli_connect("localhost","root","","peminjaman_buku");
    $sql ="select * from mahasiswa";
    $hasil=mysqli_query($host,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Pinjaman Buku</title>

</head>
<body>

    <!-- ini boostrapnya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <table class="table">
  <thead>

    <tr>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Buku Pinjaman</th>
    </tr>
  </thead>

  <tbody>

  <?php

    include "koneksi.php";

    $host = mysqli_connect("localhost","root","","peminjaman_buku");
    $sql ="select * from mahasiswa";
    $hasil=mysqli_query($host,$sql);



  $sql ="select * from mahasiswa";
  while($row=mysqli_fetch_assoc($hasil)){
        ?>
    <tr>
      <td><?php echo $row['npm'] ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['jurusan'] ?></td>
      <td><?php echo $row['bukuPinjaman'] ?></td>
    </tr>
    <?php
    }
    ?>
   
  </tbody>
</table>
    
</body>
</html>
