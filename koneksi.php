<?php 

$server ="localhost";
$user = "root";
$pass="";
$nama_db="pasien";

$db = mysqli_connect($server,$user,$pass,$nama_db);

if(!$db){
  die("Gagal Terkoneksi dengan Database".mysqli_connect_error());
}
