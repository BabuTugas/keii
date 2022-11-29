<?php
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nama = $_POST['nama_guru'];
        $alamat = $_POST['alamat'];
        $gelar = $_POST['gelar'];

        $query = "insert into guru values (null,'$nama','$alamat','$gelar')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index2.php");
            echo "data berhasil di tambahkan <a href='index2.php'>[Home]</a>";
        } else {
            echo $query;
        }
    }
}
if (isset($_POST['aksi']))
    if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index2.php'>[Home]</a>";
        //  var_dump($_POST);
        $nip = $_POST['nip'];
        var_dump($nip);
        $nama = $_POST['nama_guru'];
        $alamat = $_POST['alamat'];
        $gelar = $_POST['gelar'];

        $query = "update guru set nama_guru='$nama', alamat='$alamat', gelar='$gelar' where
      nip='$nip';";


        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: index2.php");
            die();
        } else {
            echo $query;
        }
    }

if (isset($_GET['hapus'])) {
    $nip = $_GET['hapus'];
    $query = "delete from guru where nip='$nip';";
    $sql = mysqli_query($conn, $query);

    //var_dump($query);
    //die();
    if ($sql) {
        header("Location: index2.php");
        die();
        echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
    echo "Hapus Data <a href='index2.php'>[Home]</a>";
}
