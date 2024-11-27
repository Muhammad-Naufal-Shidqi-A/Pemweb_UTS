<?php
include 'koneksi.php'; // Pastikan file koneksi Anda benar

// Query untuk mengambil data pasien dan dokter
$pasien_result = mysqli_query($koneksi, "SELECT id_pasien, Nama FROM pasien");
$dokter_result = mysqli_query($koneksi, "SELECT id_dokter, nama FROM dokter");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Rekdis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="tambah.css">
</head>
<body>

<div class="container">
    <form method="POST" action="tampil rekdis.php">
        <button type="submit" class="btn btn-outline-primary btn-block mt-4">Tampilkan Data Rekam Medis</button>
    </form>
    
    <h3>Tambah Data Rekam Medis</h3>
    
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
        <div class="alert alert-success alert-custom" role="alert">
            Data berhasil disimpan!
        </div>
    <?php } elseif (isset($_GET['status']) && $_GET['status'] == 'error') { ?>
        <div class="alert alert-danger alert-custom" role="alert">
            Gagal menyimpan data! Silakan coba lagi.
        </div>
    <?php } ?>
    
    <form method="post" action="inputuser rekdis.php">
        <!-- Dropdown untuk memilih pasien -->
        <div class="form-group">
            <label for="id_pasien">Id Pasien</label>
            <select class="form-control form-control-sm" id="id_pasien" name="id_pasien" required>
                <option value="" disabled selected>Pilih Pasien</option>
                <?php while ($pasien = mysqli_fetch_assoc($pasien_result)) { ?>
                    <option value="<?= $pasien['id_pasien'] ?>">
                        <?= $pasien['id_pasien'] ?> - <?= $pasien['Nama'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <!-- Dropdown untuk memilih dokter -->
        <div class="form-group">
            <label for="id_dokter">Id Dokter</label>
            <select class="form-control form-control-sm" id="id_dokter" name="id_dokter" required>
                <option value="" disabled selected>Pilih Dokter</option>
                <?php while ($dokter = mysqli_fetch_assoc($dokter_result)) { ?>
                    <option value="<?= $dokter['id_dokter'] ?>">
                        <?= $dokter['id_dokter'] ?> - <?= $dokter['nama'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="Tanggal">Tanggal</label>
            <input class="form-control form-control-sm" type="text" id="Tanggal" name="Tanggal" required>
        </div>

        <div class="form-group">
            <label for="Diagnosa">Diagnosa</label>
            <input class="form-control form-control-sm" type="text" id="Diagnosa" name="Diagnosa" required>
        </div>

        <div class="form-group">
            <label for="Pengobatan">Pengobatan</label>
            <input class="form-control form-control-sm" type="text" id="Pengobatan" name="Pengobatan" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-custom">Simpan</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsL1nL72bqN7tuIi+Vh+O0XQduM6UczX9hW6brwxO9PskOtz/jQnnXMiSYco7n71" crossorigin="anonymous"></script>
</body>
</html>
