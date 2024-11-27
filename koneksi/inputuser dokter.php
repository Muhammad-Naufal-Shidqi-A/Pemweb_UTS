<?php
include 'koneksi.php'; // pastikan file koneksi Anda benar

// Ambil ID dokter terakhir dari database
$result = mysqli_query($koneksi, "SELECT id_dokter FROM dokter ORDER BY id_dokter DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Jika ada ID dokter, tambahkan 1 pada ID terakhir
    $last_id = $row['id_dokter'];
    $new_id = $last_id + 1;
} else {
    // Jika tidak ada data sama sekali, mulai dari ID awal, misalkan 10202
    $new_id = 10201;
}

// Ambil data lain dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$spesialisasi = $_POST['spesialisasi'];
$no_telepon = $_POST['no_telepon'];

// Simpan data ke dalam tabel dokter
$sql = "INSERT INTO dokter (id_dokter, nama, jenis_kelamin, spesialisasi, no_telepon) 
        VALUES ('$new_id', '$nama', '$jenis_kelamin', '$spesialisasi', '$no_telepon')";

if (mysqli_query($koneksi, $sql)) {
    // Redirect ke tampil_dokter.php jika sukses
    header("Location: tampil dokter.php?status=success");
} else {
    // Redirect ke tampil_dokter.php jika gagal
    header("Location: tampil dokter.php?status=error");
}
exit();
?>
