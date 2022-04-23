<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_rizki";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}
?>