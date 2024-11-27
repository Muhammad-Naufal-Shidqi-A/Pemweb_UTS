<?php
include('koneksi.php');
$id_dokter    = $_POST['id_dokter'];
$nama      = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$spesialisasi   = $_POST['spesialisasi'];
$no_telepon   = $_POST['no_telepon'];
$query = "UPDATE dokter SET id_dokter = '$id_dokter', nama = '$nama', jenis_kelamin = '$jenis_kelamin', spesialisasi = '$spesialisasi', no_telepon = '$no_telepon' WHERE id_dokter = '$id_dokter'";
if($koneksi->query($query)) {
    header("location: tampil dokter.php");
} else {
    echo "Data Gagal Diupate!";
}
?>