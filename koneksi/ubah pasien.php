<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pasien</title>
	<link rel="stylesheet" href="ubah.css">
</head>
<body>

<div class="container">
    <h2>Update Data Pasien</h2>
    <a class="back-link" href="tampil dokter.php">← Kembali</a>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pasien where id_pasien='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update pasien.php">
			<table> 
				<tr>
					<td>Nama Pasien</td>
					<input type="hidden" name="id_pasien" value="<?php echo $d['id_pasien']; ?>">
					<td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
				</tr>
				<tr>			
					<td>Usia</td>
					<td>
						<input type="text" name="Usia" value="<?php echo $d['Usia']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="Jenis_kelamin" value="<?php echo $d['Jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
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