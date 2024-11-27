<?php
include('koneksi.php');
$id_ruangan = $_POST['id_ruangan'];
$nomor_ruangan = $_POST['nomor_ruangan'];
$jenis_ruangan = $_POST['jenis_ruangan'];

$query = "UPDATE ruangan SET nomor_ruangan = '$nomor_ruangan', jenis_ruangan = '$jenis_ruangan' WHERE id_ruangan = '$id_ruangan'";

if ($koneksi->query($query)) {
    header("location: tampil ruangan.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>
