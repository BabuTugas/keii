<!DOCTYPE html>
<?php
include 'koneksi.php';
$kode_nilai;
$nis = '';
$kode_mapel = '';
$nilai = '';

if (isset($_GET['ubah'])) { {
    $kode_nilai = $_GET['ubah'];

    $query = "select * from nilai where kode_nilai ='$kode_nilai';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    $nis = $result['nis'];
    $kode_mapel = $result['kode_mapel'];
    $nilai = $result['nilai'];

    //var_dump($result);
    //die();
  }
}
?>
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
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Silahkan di isi</a>

  </nav>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p>WELCOME</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      SMKN 3 KOTA BEKASI <cite title="Source Title"></cite>
    </figcaption>
  </figure>

</body>
<form method="POST" action="proses4.php">
  <input type="hidden" value="<?php echo $kode_nilai ?>" nama="kode_nilai">
  <div class="container">
    <div class="form-floating">
      <select id="nis" nama="nis" class="input">
        <option>-Nama Siswa-</option>
        <?php
        $sql_nis = $conn->query("select *from siswa order by nama asc");
        while ($r = $sql_nis->fetch_object()) { ?>
          <option value="<?php echo $r->nis ?>"> <?= $r->nama ?></option>
        <?php } /* end while */ ?>
      </select>
    </div>
    <div class="container">
      <div class="form-floating">
        <select id="kode_mapel" name="kode_mapel" class="input">
          <option>-Nama Mapel-</option>
          <?php
          $sql_nisn = $conn->query("select * from mapel order by kode_mapel asc");
          while ($r = $sql_nisn->fetch_object()) { ?>
            <option value="<?php echo $r->kode_mapel ?>"> <?= $r->nama_mapel ?></option>
          <?php } /* end while */ ?>
        </select>
      </div>

      <div class="mb-3">
        <p><label for="exampleFormControlInput1" class="form-label">Nilai</label> : </label></p>
        <input type="number" name="nilai" class="form-control" id="nilai" placeholder="Masukan Nilai" value="<?php echo $nilai; ?>" required>
      </div>
      <div class="mb-3">
        <div class="col">
          <?php
          if (isset($_GET['ubah'])) {
          ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-success">
              Simpan Perubahan
            </button>
          <?php
          } else {
          ?>
            <button type="submit" name="aksi" value="add" class="btn btn-success">
              Tambah Data
            </button>
          <?php
          }
          ?>
          <a href="index4.php" type="button" class="btn btn-danger">
            Batal
          </a>
        </div>

      </div>
</form>

</body>

</html>