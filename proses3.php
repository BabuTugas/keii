<?php
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nip = $_POST['nip'];
        $nama_mapel = $_POST['nama_mapel'];
        $semester = $_POST['semester'];

        $query = "insert into mapel values (null,'$nip','$nama_mapel','$semester')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index3.php");
            echo "data berhasil di tambahkan <a href='index3.php'>[Home]</a>";
        } else {
            echo $query;
        }
    }
}
if (isset($_POST['aksi']))
    if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index3.php'>[Home]</a>";
        //  var_dump($_POST);
        $nip = $_POST['nip'];
        var_dump($nip);
        $kode_mapel = $_POST['kode_mapel'];
        $nip = $_POST['nip'];
        $nama_mapel = $_POST['nama_mapel'];
        $semester = $_POST['semester'];

        $query = "update mapel set kode_mapel='$kode_mapel', nip='$nip', nama_mapel='$nama_mapel', semester='$semester' where
      nip='$nip';";


        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index3.php");
            die();
        } else {
            echo $query;
        }
    }

if (isset($_GET['hapus'])) {
    $nip = $_GET['hapus'];
    $query = "delete from mapel where nip='$nip';";
    $sql = mysqli_query($conn, $query);

    //var_dump($query);
    //die();
    if ($sql) {
        header("Location: index3.php");
        die();
        echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
    echo "Hapus Data <a href='index3.php'>[Home]</a>";
}
