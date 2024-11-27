<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Ruangan</title>
	<link rel="stylesheet" href="ubah.css">
</head>
<body>

<div class="container">
    <h2>Update Data Ruangan</h2>
    <a class="back-link" href="tampil dokter.php">← Kembali</a>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from ruangan where id_ruangan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update ruangan.php">
			<table> 
				<tr>
					<td>Nomor Ruangan</td>
					<input type="hidden" name="id_ruangan" value="<?php echo $d['id_ruangan']; ?>">
					<td><input type="text" name="nomor_ruangan" value="<?php echo $d['nomor_ruangan']; ?>"></td>
				</tr>
				<tr>			
					<td>Jenis Ruangan</td>
					<td>
						<input type="text" name="jenis_ruangan" value="<?php echo $d['jenis_ruangan']; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>