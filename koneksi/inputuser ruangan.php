<?php
include 'koneksi.php'; // Pastikan file koneksi Anda benar

// Ambil ID ruangan terakhir dari database
$result = mysqli_query($koneksi, "SELECT id_ruangan FROM ruangan ORDER BY id_ruangan DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Jika ada ID ruangan, tambahkan 1 pada ID terakhir
    $last_id = $row['id_ruangan'];
    $new_id = $last_id + 1;
} else {
    // Jika tidak ada data sama sekali, mulai dari ID awal, misalkan 10201
    $new_id = 10201;
}

// Ambil data lain dari form
$nomor_ruangan = $_POST['nomor_ruangan'];
$jenis_ruangan = $_POST['jenis_ruangan'];

// Simpan data ke dalam tabel ruangan
$sql = "INSERT INTO ruangan (id_ruangan, nomor_ruangan, jenis_ruangan) 
        VALUES ('$new_id', '$nomor_ruangan', '$jenis_ruangan')";

if (mysqli_query($koneksi, $sql)) {
    // Redirect ke tampil_ruangan.php jika sukses
    header("Location: tampil ruangan.php?status=success");
} else {
    // Redirect ke tampil_ruangan.php jika gagal
    header("Location: tampil ruangan.php?status=error");
}
exit();
?>
