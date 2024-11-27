<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Dokter</title>
	<link rel="stylesheet" href="ubah.css">
</head>
<body>

<div class="container">
    <h2>Update Data Dokter</h2>
    <a class="back-link" href="tampil dokter.php">← Kembali</a>

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
                <input type="hidden" name="id_dokter" value="<?php echo $d['id_dokter']; ?>">
                <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>" required></td>
            </tr>
            <tr>            
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>" required></td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td><input type="text" name="spesialisasi" value="<?php echo $d['spesialisasi']; ?>" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php 
    }
    ?>
</div>

</body>
</html>
