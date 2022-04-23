<!DOCTYPE html>
<html lang="id">
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="form.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<table width="90%" border="1" cellspacing="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Email</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$sql = "SELECT * FROM tbl_086";
		$data = mysqli_query($koneksi,$sql);
		while($row = mysqli_fetch_array($data))
		{
		?>
			<tr>
                <td><?=$row['id_086'];?></td>
                <td><?=$row['nama_086'];?></td>
                <td><?=$row['email_086'];?></td>
                <td> 
                    <a href="update.php?id=<?=$row['id_086']?>"> Edit | 
                    <a href="delete.php?id=<?=$row['id_086']?>"> Delete
                </td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>