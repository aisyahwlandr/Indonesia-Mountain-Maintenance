<?php
include 'koneksi.php';

if ($_GET['action'] == 'delete') {
    $hasil = mysqli_query($db, "DELETE FROM pengunjung WHERE id='" . $_GET['id'] . "'");
    header('location:admin.php');
} elseif ($_GET['action'] == 'insert') {
    $nama = $_FILES['photo']['name'];
    $savephoto = "image/" . date('h-i-s') . $nama;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $savephoto);

    $hasil = mysqli_query($db, "INSERT INTO pengunjung 
    (nama, asaldaerah, jeniskelamin, nokerabat, namagunung, tglnaik, tglturun, photo) VALUES ('$_POST[nama]', '$_POST[asaldaerah]', '$_POST[jeniskelamin]', '$_POST[nokerabat]', '$_POST[namagunung]', '$_POST[tglnaik]', '$_POST[tglturun]', '$savephoto')");
    header('location:admin.php');
} elseif ($_GET['action'] == 'update') {
    $idToUpdate = $_GET['id'];
    $nama = $_FILES['photo']['name'];
    $savephoto = "image/" . date('h-i-s') . $nama;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $savephoto);

    $hasil = mysqli_query($db, "UPDATE pengunjung SET 
    nama = '$_POST[nama]', asaldaerah = '$_POST[asaldaerah]', jeniskelamin = '$_POST[jeniskelamin]', nokerabat = '$_POST[nokerabat]', namagunung = '$_POST[namagunung]', tglnaik = '$_POST[tglnaik]', tglturun = '$_POST[tglturun]', photo = '$savephoto' WHERE id = '$idToUpdate'");
    header('location:admin.php');
}
?>
