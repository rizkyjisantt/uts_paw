<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_086 WHERE id_086=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}
else {
    echo "Data mahasiswa berhasil dihapus <br>";
    echo "<a href='index.php'>Show Data </a>";
}

?>