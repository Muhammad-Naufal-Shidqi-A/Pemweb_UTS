<?php
// check_password.php

// Informasi koneksi database
$host = 'localhost';        // Ganti dengan host database Anda
$username = 'root';         // Nama pengguna database
$password = '';             // Password database
$dbname = 'pbdpoliteknik';  // Nama database di HeidiSQL

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Variabel pesan untuk menyimpan hasil
$message = '';

// Mengecek apakah username diinputkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $input_username = $_POST['username'];

    // Query untuk mendapatkan password berdasarkan username
    $sql = "SELECT password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->bind_result($password);

    // Mengecek apakah data ditemukan
    if ($stmt->fetch()) {
        $message = "Password Anda adalah: " . htmlspecialchars($password);
    } else {
        $message = "Username tidak ditemukan. Silakan cek kembali.";
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Password</title>
    <style>
        /* Styling untuk tampilan yang lebih menarik dan responsif */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #009688, #004d40);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .notification-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 0.6s ease-in-out;
        }

        /* Efek zoom ketika form terkena kursor */
        .notification-container:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .notification {
            background-color: #e3f2fd;
            color: #1565c0;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .button-container a {
            background-color: #009688;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .button-container a:hover {
            background-color: #00796b;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="notification-container">
        <h2>Check Password</h2>
        
        <!-- Menampilkan pesan hasil pencarian -->
        <div class="notification">
            <p><?php echo $message; ?></p>
        </div>

        <div class="button-container">
            <a href="form login.php">Back to Login</a>
        </div>
    </div>
</body>
</html>
