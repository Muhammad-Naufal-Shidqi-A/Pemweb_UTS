<?php
include('koneksi.php');

$id_rekdis    = $_POST['id_rekdis'];
$id_pasien    = $_POST['id_pasien'];
$id_dokter    = $_POST['id_dokter'];
$Tanggal      = $_POST['Tanggal'];
$Diagnosa     = $_POST['Diagnosa'];
$Pengobatan   = $_POST['Pengobatan'];

$query = "UPDATE rekam_medis SET 
    id_pasien = '$id_pasien', 
    id_dokter = '$id_dokter', 
    Tanggal = '$Tanggal', 
    Diagnosa = '$Diagnosa', 
    Pengobatan = '$Pengobatan' 
WHERE id_rekdis = '$id_rekdis'";

if($koneksi->query($query)) {
    header("location: tampil rekdis.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>
