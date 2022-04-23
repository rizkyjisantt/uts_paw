<?php
include "koneksi.php";

$nama = $_POST['nama_086'];
$email = $_POST['email_086'];

$sql = "INSERT INTO tbl_086 VALUES(null, '$nama','$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data gagal";
}
else{
    echo "eksekusi tambah data berhasil <br>";
    echo "<a href = 'index.php'>Show Data </a>";
}

?>