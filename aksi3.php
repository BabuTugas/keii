<?php
include 'koneksi.php';
$nip = '';
$nama_mapel = '';
$semester = '';
if (isset($_GET['ubah'])) { {
        $nip = $_GET['ubah'];
        $query = "select * from mapel where nip ='$nip';";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);
        $nip = $result['nip'];
        $nama_mapel = $result['nama_mapel'];
        $semester = $result['semester'];
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

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Table guru</a>
        </div>
    </nav>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Halaman Ubah</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            SMKN3 <cite title="Source Title">XI TKJ 1</cite>
        </figcaption>
    </figure>
    <form method="POST" action="proses3.php">
        <input type="hidden" value="<?php echo $kode_mapel ?>" name="kode_mapel">
        <div class="container">
            <div class="form-floating">
                <select id="nip" name="nip" class="input">
                    <option>-Pilih Guru-</option>
                    <?php
                    $sql_nip = $conn->query("select * from guru order by nama_guru asc");
                    while ($r = $sql_nip->fetch_object()) { ?>
                        <option value="<?php echo $r->nip ?>"> <?= $r->nama_guru ?> </option>
                    <?php } /* end while */ ?>
                </select>
            </div>
            <div class="form-floating">
                <div class="col-sm-10">
                    <input type="hidden" value="<?php echo $kode_mapel ?>" name="kode_mapel"></input>
                </div>
            </div>
            <br>
            <div class="form-floating">
                <div class="col-sm-10">
                    <input type="text" name="nama_mapel" class="form-control" id="nama_mapel" placeholder="nama_mapel" value="<?php echo $nama_mapel; ?>">
                </div>
            </div><br>
            <div class="form-floating">
                <div class="col-sm-10">
                    <input type="text" name="semester" class="form-control" id="semester" placeholder="semester" value="<?php echo $semester; ?>">
                </div>
            </div><br>
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
                    <a href="index3.php" type="button" class="btn btn-danger">
                        Batal
                    </a>
                </div>
            </div>
    </form>
    </div>
    </div>
</body>

</html>