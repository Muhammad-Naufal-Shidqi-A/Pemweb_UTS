<?php
include 'koneksi.php'; // Pastikan file koneksi Anda benar

// Cek apakah data id_pasien dan id_dokter ada dalam POST
if (!isset($_POST['id_pasien']) || !isset($_POST['id_dokter'])) {
    die("ID Pasien atau ID Dokter tidak ditemukan dalam formulir. Pastikan data telah dikirimkan dengan benar.");
}

// Mendapatkan ID rekam medis terakhir
$result = mysqli_query($koneksi, "SELECT id_rekdis FROM rekam_medis ORDER BY id_rekdis DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $last_id0 = $row['id_rekdis'];
    $new_id0 = $last_id0 + 1;
} else {
    $new_id0 = 10201; // Jika tidak ada data sama sekali, mulai dari ID awal
}

// Ambil data lain dari form
$id_pasien = $_POST['id_pasien'];
$id_dokter = $_POST['id_dokter'];
$Tanggal = $_POST['Tanggal']; // Format input: DD-MM-YYYY
$Diagnosa = $_POST['Diagnosa'];
$Pengobatan = $_POST['Pengobatan'];

// Periksa apakah id_pasien dan id_dokter ada di tabel pasien dan dokter
$cek_pasien = mysqli_query($koneksi, "SELECT id_pasien FROM pasien WHERE id_pasien = '$id_pasien'");
$cek_dokter = mysqli_query($koneksi, "SELECT id_dokter FROM dokter WHERE id_dokter = '$id_dokter'");

if (mysqli_num_rows($cek_pasien) == 0) {
    die("ID Pasien tidak ditemukan di tabel pasien. Pastikan ID Pasien yang dimasukkan sudah benar.");
}

if (mysqli_num_rows($cek_dokter) == 0) {
    die("ID Dokter tidak ditemukan di tabel dokter. Pastikan ID Dokter yang dimasukkan sudah benar.");
}

// Ubah format tanggal menjadi YYYY-MM-DD
$date = DateTime::createFromFormat('d-m-Y', $Tanggal);
$TanggalFormatted = $date ? $date->format('Y-m-d') : null;

if ($TanggalFormatted) {
    // Simpan data ke dalam tabel rekam_medis
    $sql = "INSERT INTO rekam_medis (id_rekdis, id_pasien, id_dokter, Tanggal, Diagnosa, Pengobatan) 
            VALUES ('$new_id0', '$id_pasien', '$id_dokter', '$TanggalFormatted', '$Diagnosa', '$Pengobatan')";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect ke tampil rekdis.php jika sukses
        header("Location: tampil rekdis.php?status=success");
        exit;
    } else {
        // Tampilkan pesan kesalahan jika query gagal
        echo "Data Gagal Ditambahkan: " . mysqli_error($koneksi);
    }
} else {
    echo "Format Tanggal Salah!";
}
?>
