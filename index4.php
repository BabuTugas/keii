<?php
include 'koneksi.php';
$query = "select*from nilai;";
$sql = mysqli_query($conn, $query);
$No = 1;

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

<body>

  <nav class="navbar navbar-dark bg-success">
    <div class="container">
      <?php include 'navbar.php' ?>
    </div>
  </nav>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p>WELCOME</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      HASIL BELAJAR <cite title="Source Title"></cite>

    </figcaption>
    <a class="btn btn-dark" href="aksi4.php" type="button"> Tambah Data</a>
  </figure>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nis</th>
        <th scope="col">Kode Mapel</th>
        <th scope="col">Nilai</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php
      while ($result = mysqli_fetch_assoc($sql)) {
      ?>
        <tr>
          <td>
            <?php echo $No++; ?>.
          </td>
          <td>
            <?php echo $result['nis']; ?>
          </td>
          <td>
            <?php echo $result['kode_mapel']; ?>
          </td>
          <td>
            <?php echo $result['nilai']; ?>
          </td>

          <td>
            <a class="btn btn-success" href="aksi4.php?ubah= <?php echo $result['kode_nilai']; ?>" type="button">Edit</a>
            <a class="btn btn-danger" href="proses4.php?hapus= <?php echo $result['kode_nilai']; ?>" type="button" onClick="ppp">Hapus</a>
          </td>
          </td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
  <script window.print();>
    < a class = "btn btn-gold"
    script type = "button" >Generate Nilai</a>
  </script>
</body>

</div>

</body>

</html>