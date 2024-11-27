<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="tambah.css">
</head>
<body>

    <div class="container">
        <!-- Form to view data first -->
        <form method="POST" action="tampil ruangan.php">
            <button type="submit" class="btn btn-outline-primary btn-block mt-4">Tampilkan Data Ruangan</button>
        </form>
        
        <h3>Tambah Data Ruangan</h3>
        
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
        
        <form method="post" action="inputuser ruangan.php">
            <div class="form-group">
                <label for="nama">No Ruangan</label>
                <input class="form-control form-control-sm" type="text" id="nomor_ruangan" name="nomor_ruangan" required>
            </div>
            
            <div class="form-group">
                <label for="spesialisasi">Jenis Ruangan</label>
                <input class="form-control form-control-sm" type="text" id="jenis_ruangan" name="jenis_ruangan" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-custom">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsL1nL72bqN7tuIi+Vh+O0XQduM6UczX9hW6brwxO9PskOtz/jQnnXMiSYco7n71" crossorigin="anonymous"></script>
</body>
</html>
