<?php
$server     = "localhost";
$dbname     = "mercy_dtc";
$username   = "root";
$password   = "";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
  die("koneksi gagal:" . mysqli_error($conn));
}
