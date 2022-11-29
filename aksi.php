<!DOCTYPE html>
<?php
include 'koneksi.php';
$nis = '';
$nama = '';
$alamat = '';
$usia = '';
$kelas = '';


if (isset($_GET['ubah'])) { {
        $nis = $_GET['ubah'];

        $query = "select * from siswa where nis ='$nis';";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);
        $nama = $result['nama'];
        $alamat = $result['alamat'];
        $usia = $result['usia'];
        $kelas = $result['kelas'];

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
    <title>Document</title>
</head>
<nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
        <h2> <a class="navbar-brand" href="beranda.php">Beranda</a> </h2>
        <a class="navbar-brand" href="index.php">Siswa</a>
        <a class="navbar-brand" href="index2.php">Guru</a>
        <a class="navbar-brand" href="index3.php">Mapel</a>
        <a class="navbar-brand" href="index4.php">Nilai</a>
    </div>
</nav>
</body>
<figure class="text-center">
    <blockquote class="blockquote">
        <p>Halaman Ubah</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        SMKN3 <cite title="Source Title">XI TKJ 1</cite>
    </figcaption>
</figure>
<form method="POST" action="proses.php">
    <div class="container">
        <input type="hidden" value="<?php echo $nis ?>" name="nis">
        <div class="form-floating mb-3">
        </div>
        <div class="form-floating">
            <div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            </div>

            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="NAMA" value="<?php echo $nama; ?>">
            </div>
        </div>
        <br>
        <div class="form-floating">
            <div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            </div>

            <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="ALAMAT" value="<?php echo $alamat; ?>">
            </div>
        </div><br>
        <div class="form-floating">
            <div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usia</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="usia" class="form-control" id="usia" placeholder="USIA" value="<?php echo $usia; ?>">
            </div>
        </div><br>
        <div class="form-floating">
            <div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="kelas" class="form-control" id="kelas" placeholder="KELAS" value="<?php echo $kelas; ?>">
            </div>
        </div><br>
    </div>
    <div class="container">
        <div class="mb-3 row mt-4">
            <div class="col">
                <?php
                if (isset($_GET['ubah'])) {
                ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                <?php
                } else {
                ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        Tambah Data
                    </button>
                <?php
                }
                ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    Batal
                </a>
            </div>
        </div>
</form>
</div>
</div>

</body>

</html>