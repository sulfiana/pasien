<?php
include 'koneksi.php';

$kode_pasien = $_GET['kode_pasien'];


$sql = "DELETE FROM tbl_pasien WHERE kode_pasien ='$kode_pasien'";
if (mysqli_query($db, $sql)) {
  header('Location: data-pasien.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
