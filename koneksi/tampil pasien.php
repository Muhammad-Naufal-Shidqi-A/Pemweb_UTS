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
<div class="sidebar">
        <h2>Poliklinik Violet Abadi</h2>
        <img src="hospital.jpg" alt="Logo Klinik" class="logo-klinik">
        <a href="home.php"><i class="fa fa-home"></i>Home</a>
        <a href="tampil dokter.php"><i class="fa fa-user-md"></i>Data Dokter</a>
        <a href="tampil pasien.php"><i class="fa fa-users"></i>Data Pasien</a>
        <a href="tampil rekdis.php"><i class="fa fa-notes-medical"></i>Data Rekam Medis</a>
        <a href="tampil ruangan.php"><i class="fa fa-clinic-medical"></i>Data Ruangan</a>
    </div>
<body>
<div class="content">
        <h2>Data Pasien</h2>
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
        <a href="tambah pasien.php" class="btn btn-custom mb-3"><i class="fa fa-plus"></i> Tambah Data Pasien</a>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Usia</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
                    <th>Aksi</th>
					
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pasien");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_pasien']; ?></td>
                        <td><?php echo $d['Nama']; ?></td>
                        <td><?php echo $d['Usia']; ?></td>
						<td><?php echo $d['Jenis_kelamin']; ?></td>
						<td><?php echo $d['Alamat']; ?></td>
                        <td>
                            <a role="button" class="btn btn-info btn-sm" href="ubah pasien.php?id=<?php echo $d['id_pasien']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Ubah</a>
                            <a role="button" class="btn btn-danger btn-sm" href="hapus pasien.php?id=<?php echo $d['id_pasien']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
