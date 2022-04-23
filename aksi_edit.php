<?php
include "koneksi.php";

$id = $_POST['id_086'];
$nama = $_POST['nama_086'];
$email = $_POST['email_086'];

$sql = "UPDATE tbl_086 set nama_086='$nama', email_086='$email' WHERE id_086=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data gagal";
}
else{
    echo "eksekusi update data berhasil <br>";
    echo "<a href = 'index.php'>Show Data </a>";
}

?>