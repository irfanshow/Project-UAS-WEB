<?php
include "koneksi.php";

    $nama = $_POST["nama"];
    $npm= $_POST["npm"];
    $jurusan = $_POST["jurusan"];
    $bukuPinjaman = $_POST["bukuPinjaman"];
    $sql ="insert into mahasiswa values('$npm','$nama','$jurusan','$bukuPinjaman')";

    $hasil=mysqli_query($host,$sql);

    echo "Data telah terkirim !";

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

    <form action="dataMahasiswa.php" method="post">
        <label>Nama :</label>
        <input type="text" name="nama"><br>

        <label>NPM : </label>
        <input type="text" name="npm" value = "-"><br>

        <label>Jurusan : </label>
        <input type="text" name="jurusan" value = "-"><br>

        <input type="radio" id="buku" name="bukuPinjaman" value="Kancil dan Doctor Streng">
        <label for="buku">Kancil dan Doctor Streng</label><br>

        <input type="radio" id="buku" name="bukuPinjaman" value="Buaya dan Doctor Wanda">
        <label for="buku">Buaya dan Doctor Wanda</label><br>

        <input type="radio" id="buku" name="bukuPinjaman" value="apa nie">
        <label for="buku">apa nie</label><br>
        
        <input type="submit" value="Kirim">




    </form>
    
</body>
</html>