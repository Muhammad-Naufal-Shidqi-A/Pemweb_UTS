<?php
include('koneksi.php');
$id_pasien    = $_POST['id_pasien'];
$Nama      = $_POST['Nama'];
$Usia = $_POST['Usia'];
$Jenis_kelamin   = $_POST['Jenis_kelamin'];
$Alamat   = $_POST['Alamat'];
$query = "UPDATE pasien SET id_pasien = '$id_pasien', Nama = '$Nama', Usia = '$Usia', Jenis_kelamin = '$Jenis_kelamin', Alamat = '$Alamat' WHERE id_pasien = '$id_pasien'";
if($koneksi->query($query)) {
    header("location: tampil pasien.php");
} else {
    echo "Data Gagal Diupate!";
}
?>