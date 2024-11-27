<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Rekam Medis</title>
	<link rel="stylesheet" href="ubah.css">
</head>
<body>

<div class="container">
    <h2>Update Data Rekam Medis</h2>
    <a class="back-link" href="tampil dokter.php">← Kembali</a>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from rekam_medis where id_rekdis='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update rekdis.php">
            <table class="table table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <input type="hidden" name="id_rekdis" value="<?php echo $d['id_rekdis']; ?>">
                    <input type="hidden" name="id_pasien" value="<?php echo $d['id_pasien']; ?>">
                    <input type="hidden" name="id_dokter" value="<?php echo $d['id_dokter']; ?>">
                    <td><input type="text" name="Tanggal" class="form-control" value="<?php echo $d['Tanggal']; ?>" ></td>
                </tr>
                <tr>
                    <th>Diagnosa</th>
                    <td><input type="text" name="Diagnosa" class="form-control" value="<?php echo $d['Diagnosa']; ?>"></td>
                </tr>
                <tr>
                    <th>Pengobatan</th>
                    <td><input type="text" name="Pengobatan" class="form-control" value="<?php echo $d['Pengobatan']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" value="SIMPAN" class="btn btn-success">
                    </td>
                </tr>
            </table>
        </form>
		<?php 
	}
	?>
 
</body>
</html>