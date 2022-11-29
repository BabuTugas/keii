<?php
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $kode_nilai = $_POST['kode_nilai'];
        $nis = $_POST['nis'];
        $kode_mapel = $_POST['kode_mapel'];
        $nilai = $_POST['nilai'];

        $query = "insert into nilai values (null,'$nis','$kode_mapel','$kode_nilai')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index4.php");
            echo "data berhasil di tambahkan <a href='index4.php'>[Home]</a>";
        } else {
            echo $query;
        }
    }
}
if (isset($_POST['aksi']))
    if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index4.php'>[Home]</a>";
        //  var_dump($_POST);
        $kode_nilai = $_POST['kode_nilai'];
        $nis = $_POST['nis'];
        $kode_mapel = $_POST['kode_mapel'];
        $nilai = $_POST['nilai'];

        $query = "update nilai nis='$nis', kode_mapel='$kode_mapel', nilai='$nilai' where kode_nilai='$kode_nilai';";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index4.php");
            die();
        } else {
            echo $query;
        }
    }

if (isset($_GET['hapus'])) {
    $nis = $_GET['hapus'];
    $query = "delete from nilai where kode_nilai='$kode_nilai';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: index4.php");
        die();
        echo "data berhasil di tambahkan <a href='index4.php'>[Home]</a>";
    } else {
        echo $query;
    }
    echo "Hapus Data <a href='index4.php'>[Home]</a>";
}
