<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="tampil.css">
    <style>
        /* Additional Styling for Content */
        .content {
            margin-left: 260px;
            padding: 30px;
            background-color: #aecefe;
            animation: fadeIn 1s ease-in-out;
        }
        .content h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 40px;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
        .content p {
            text-align: center;
            font-size: 24px;
            color: #555;
            margin-bottom: 50px;
        }
        
        /* Styling for Cards */
        .card-link {
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card-body i {
            color: #007bff;
        }
        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

        /* Hover Effect for Cards */
        .card:hover .card-title {
            color: #0056b3;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .content h2::after {
            content: '';
            width: 1080px;
            height: 2px;
            background-color: #007bff;
            position: absolute;
            bottom: 1;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
}
    </style>
</head>
<body>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h2>Poliklinik Violet Abadi</h2>
        <img src="hospital.jpg" alt="Logo Klinik" class="logo-klinik">
        <a href="home.php"><i class="fa fa-home"></i> Home</a>
        <a href="tampil dokter.php"><i class="fa fa-user-md"></i> Data Dokter</a>
        <a href="tampil pasien.php"><i class="fa fa-users"></i> Data Pasien</a>
        <a href="tampil rekdis.php"><i class="fa fa-notes-medical"></i> Data Rekam Medis</a>
        <a href="tampil ruangan.php"><i class="fa fa-clinic-medical"></i> Data Ruangan</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Selamat Datang di Poliklinik Violet Abadi</h2>
        <p>Silakan pilih data yang ingin Anda akses:</p>

        <!-- Cards for Navigation -->
        <div class="row g-4">
            <!-- Data Dokter -->
            <div class="col-md-3">
                <a href="tampil dokter.php" class="card-link">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa fa-user-md fa-3x"></i>
                            <h5 class="card-title mt-2">Data Dokter</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Data Pasien -->
            <div class="col-md-3">
                <a href="tampil pasien.php" class="card-link">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa fa-users fa-3x"></i>
                            <h5 class="card-title mt-2">Data Pasien</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Data Rekam Medis -->
            <div class="col-md-3">
                <a href="tampil rekdis.php" class="card-link">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa fa-notes-medical fa-3x"></i>
                            <h5 class="card-title mt-2">Data Rekam Medis</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Data Ruangan -->
            <div class="col-md-3">
                <a href="tampil ruangan.php" class="card-link">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa fa-clinic-medical fa-3x"></i>
                            <h5 class="card-title mt-2">Data Ruangan</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
