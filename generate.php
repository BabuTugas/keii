<?php
include 'koneksi.php';
$query = "select a.Nis, a.Nama, b.Nama_Mapel, d.Nama_Guru, c.Nilai
from siswa a, mapel b, nilai c, guru d
where a.Nis = c.Nis and b.Kode_Mapel=c.Kode_Mapel and b.Nip=d.Nip;";
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
  <title>Punya Gua</title>

</head>

<body>

  <nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
      <h2> <a class="navbar-brand" href="beranda.php">Beranda</a> </h2>
      <a class="navbar-brand" href="index.php">Siswa</a>
      <a class="navbar-brand" href="index2.php">Guru</a>
      <a class="navbar-brand" href="index3.php">Mapel</a>
      <a class="navbar-brand" href="index4.php">Nilai</a>
    </div>
  </nav>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p>WELCOME</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      NILAI <cite title="Source Title"></cite>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Nama Mapel</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Nilai</th>

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
                <?php echo $result['Nis']; ?>
              </td>
              <td>
                <?php echo $result['Nama']; ?>
              </td>
              <td>
                <?php echo $result['Nama_Mapel']; ?>
              </td>
              <td>
                <?php echo $result['Nama_Guru']; ?>
              </td>
              <td>
                <?php echo $result['Nilai']; ?>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
      </div>
</body>

</html>
<script>
  window.print();
</script>