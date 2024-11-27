<?php
include 'koneksi.php'; // pastikan file koneksi Anda benar

// Ambil ID dokter terakhir dari database
$result = mysqli_query($koneksi, "SELECT id_pasien FROM pasien ORDER BY id_pasien DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Jika ada ID dokter, tambahkan 1 pada ID terakhir
    $last_id = $row['id_pasien'];
    $new_id = $last_id + 1;
} else {
    // Jika tidak ada data sama sekali, mulai dari ID awal, misalkan 10202
    $new_id = 10201;
}

// Ambil data lain dari form
$Nama = $_POST['Nama'];
$Usia = $_POST['Usia'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];
$Alamat = $_POST['Alamat'];

// Simpan data ke dalam tabel dokter
$sql = "INSERT INTO pasien (id_pasien, Nama, Usia, Jenis_kelamin, Alamat) 
        VALUES ('$new_id', '$Nama', '$Usia', '$Jenis_kelamin', '$Alamat')";

if (mysqli_query($koneksi, $sql)) {
    // Redirect ke tampil_dokter.php jika sukses
    header("Location: tampil pasien.php?status=success");
} else {
    // Redirect ke tampil_dokter.php jika gagal
    header("Location: tampil pasien.php?status=error");
}
exit();
?>
