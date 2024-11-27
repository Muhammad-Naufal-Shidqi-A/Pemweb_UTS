<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        .profile-icon img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            border-radius: 50%;
            border: 3px solid #009688;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .notification {
            background-color: #e3f2fd;
            color: #1565c0;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #009688;
            outline: none;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .button {
            background-color: #009688;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            width: 48%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #00796b;
        }

        .small-text {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .small-text a {
            color: #009688;
            text-decoration: none;
            font-weight: bold;
        }

        .small-text a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="notification-container">
        <div class="profile-icon">
            <img src="hospital.jpg" alt="Logo Klinik">
        </div>
        
        <h2>Forgot Password</h2>
        
        <div class="notification">
            <p>Masukkan username Anda untuk pengecekan data password di sistem.</p>
        </div>

        <form action="check password.php" method="POST">
            <input type="text" name="username" placeholder="Masukkan username Anda" required>
            <div class="button-container">
                <a href="form login.php" class="button">Back to Login</a>
                <button type="submit" class="button">Check Password</button>
            </div>
        </form>
        
        <p class="small-text">Pastikan data sudah benar di <a href="data password.php">data password</a> HeidiSQL.</p>
    </div>
</body>
</html>
