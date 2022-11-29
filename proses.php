<?php
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $usia = $_POST['usia'];
        $kelas = $_POST['kelas'];

        $query = "insert into siswa values (null,'$nama','$alamat','$usia','$kelas')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index.php");
            echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }
    }
}
if (isset($_POST['aksi']))
    if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index.php'>[Home]</a>";
        //  var_dump($_POST);
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $usia = $_POST['usia'];
        $kelas = $_POST['kelas'];

        $query = "update siswa set nama='$nama', alamat='$alamat', usia='$usia', kelas='$kelas' where
          nis='$nis';";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index.php");
            die();
        } else {
            echo $query;
        }
    }

if (isset($_GET['hapus'])) {
    $nis = $_GET['hapus'];
    $query = "delete from siswa where nis='$nis';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: index.php");
        die();
        echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
    echo "Hapus Data <a href='index.php'>[Home]</a>";
}
