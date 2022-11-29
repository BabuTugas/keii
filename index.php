<?php
include 'koneksi.php';

$query = "select*from siswa;";
$sql = mysqli_query($conn, $query);
$no = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

<body>

    <?php include 'navbar.php' ?>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Absen Siswa</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            SMKN3 <cite title="Source Title">XI TKJ 1</cite>
        </figcaption>
        <a class="btn btn-dark" href="aksi.php" role="button">Tambah Data</a>
    </figure>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
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
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $result['usia']; ?>.
                        </td>
                        <td>
                            <?php echo $result['kelas']; ?>
                        </td>
                        <td><a href="aksi.php?ubah= <?php echo $result['nis']; ?>" type="button" class="btn btn-success btn-sm">Ubah</a>
                            <a href="proses.php?hapus= <?php echo $result['nis']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm ('apakah anda ingin menghapus data tersebut?')">Hapus</a>
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