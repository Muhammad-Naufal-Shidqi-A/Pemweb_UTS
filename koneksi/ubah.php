<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
 
	<h2>Update Data</h2>
	<br/>
	<a href="tampil dokter.php">KEMBALI</a>
	
	<h3>Data user</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from dokter where id_dokter='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table> 
				<tr>
					<td>Nama Dokter</td>
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