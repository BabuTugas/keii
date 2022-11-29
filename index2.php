<?php
include 'koneksi.php';

$query = "select*from guru;";
$sql = mysqli_query($conn, $query);
$no = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>
<nav class="navbar navbar-dark bg-success">
  <div class="container">
    <?php include 'navbar.php' ?>
  </div>
</nav>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>Absen Siswa</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    SMKN3 <cite title="Source Title">XI TKJ 1</cite>
  </figcaption>
  <a class="btn btn-dark" href="aksi2.php" role="button">Tambah Data</a>
</figure>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Usia</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($result = mysqli_fetch_assoc($sql)) {
    ?>
      <tr>
        <td>
          <?php echo $no++; ?>
        </td>
        <td>
          <?php echo $result['nama_guru']; ?>
        </td>
        <td>
          <?php echo $result['alamat']; ?>
        </td>
        <td>
          <?php echo $result['gelar']; ?>
        </td>
        <td><a href="aksi2.php?ubah= <?php echo $result['nip']; ?>" type="button" class="btn btn-success btn-sm">Ubah</a>
          <a href="proses2.php?hapus= <?php echo $result['nip']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm ('apakah anda ingin menghapus data tersebut?')">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</body>

</html>