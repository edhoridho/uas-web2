<?php
$databaseHost = "localhost";
$databaseName = "tugas_akhir_web";
$databaseUsername = "root";
/* 
config untuk windows 
$databasePassword = "";
*/
$databasePassword = "";

$con = mysqli_connect("$databaseHost", "$databaseUsername", "$databasePassword", "$databaseName");

if (mysqli_connect_errno()) {
  echo "<h1>Koneksi database error : " . mysqli_connect_errno() . "</h1>";
}
