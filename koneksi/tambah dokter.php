<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tambah.css">
</head>
<body>

    <div class="container">
        <!-- Button to view data -->
        <form method="POST" action="tampil dokter.php">
            <button type="submit" class="btn btn-outline-primary btn-block mb-4">Tampilkan Data Dokter</button>
        </form>
        
        <h3>Tambah Data Dokter</h3>
        
        <!-- Alert for success or failure messages -->
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
            <div class="alert alert-success alert-custom" role="alert">
                Data berhasil disimpan!
            </div>
        <?php } elseif (isset($_GET['status']) && $_GET['status'] == 'error') { ?>
            <div class="alert alert-danger alert-custom" role="alert">
                Gagal menyimpan data! Silakan coba lagi.
            </div>
        <?php } ?>
        
        <form method="post" action="inputuser dokter.php">
            <div class="form-group">
                <label for="nama">Nama Dokter</label>
                <input class="form-control" type="text" id="nama" name="nama" required placeholder="Masukkan nama dokter">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih jenis kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="spesialisasi">Spesialisasi</label>
                <input class="form-control" type="text" id="spesialisasi" name="spesialisasi" required placeholder="Masukkan spesialisasi">
            </div>

            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input class="form-control" type="text" id="no_telepon" name="no_telepon" required placeholder="Masukkan no telepon">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-custom">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
