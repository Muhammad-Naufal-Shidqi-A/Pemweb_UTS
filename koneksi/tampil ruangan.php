<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik - Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="tampil.css">
</head>
<body>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h2>Poliklinik Violet Abadi</h2>
        <img src="hospital.jpg" alt="Logo Klinik" class="logo-klinik">
        <a href="home.php"><i class="fa fa-home"></i>Home</a>
        <a href="tampil dokter.php"><i class="fa fa-user-md"></i>Data Dokter</a>
        <a href="tampil pasien.php"><i class="fa fa-users"></i>Data Pasien</a>
        <a href="tampil rekdis.php"><i class="fa fa-notes-medical"></i>Data Rekam Medis</a>
        <a href="tampil ruangan.php"><i class="fa fa-clinic-medical"></i>Data Ruangan</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Data Ruangan</h2>
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
            <div class="alert alert-success" role="alert">
                Data berhasil disimpan!
            </div>
        <?php } elseif (isset($_GET['status']) && $_GET['status'] == 'error') { ?>
            <div class="alert alert-danger" role="alert">
                Gagal menyimpan data! Silakan coba lagi.
            </div>
        <?php } ?>
        <!-- Link to form for adding new doctor data -->
        <a href="tambah ruangan.php" class="btn btn-primary btn-custom">Tambah Data Ruangan</a>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Ruangan</th>
                    <th>Nomor Ruangan</th>
                    <th>Jenis Ruangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM ruangan");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_ruangan']; ?></td>
                        <td><?php echo $d['nomor_ruangan']; ?></td>
                        <td><?php echo $d['jenis_ruangan']; ?></td>
                        <td>
                            <a href="ubah ruangan.php?id=<?php echo $d['id_ruangan']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Ubah</a>
                            <a href="hapus ruangan.php?id=<?php echo $d['id_ruangan']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsL1nL72bqN7tuIi+Vh+O0XQduM6UczX9hW6brwxO9PskOtz/jQnnXMiSYco7n71" crossorigin="anonymous"></script>
</body>
</html>
