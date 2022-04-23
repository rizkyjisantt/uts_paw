<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_086 WHERE id_086=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form tambah data mahasiswa</h1> 
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
            <form method="post" action="aksi_edit.php">
                <input type="hidden" name="id_086" value="<?php echo $row['id_086']?>">
                    Nama: <input type="text" name="nama_086" value="<?php echo $row['nama_086']?>"><br/>
                    Email: <input type="text" name="email_086" value="<?php echo $row['email_086']?>"><br/>
                <button type="submit">Update</button> 
            </form>
        <?php } ?>
    </body>
</html>