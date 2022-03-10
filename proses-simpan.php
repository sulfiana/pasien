<?php
include 'koneksi.php';

$kode_pasien = $_POST['kode_pasien'];
$nama = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jk'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];



$sql = "INSERT INTO tbl_pasien VALUES('$kode_pasien', '$nama', '$jenis_kelamin', '$nohp','$alamat')";
if (mysqli_query($db, $sql)) {
  header('Location: data-pasien.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
