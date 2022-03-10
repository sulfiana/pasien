<?php
include 'koneksi.php';

$kode_pasien = $_POST['kode_pasien'];
$nama = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jk'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_pasien SET nama_pasien='$nama',jk='$jenis_kelamin',no_hp='$nohp',alamat='$alamat' WHERE kode_pasien ='$kode_pasien'";
if (mysqli_query($db, $sql)) {
  header('Location: data-pasien.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
