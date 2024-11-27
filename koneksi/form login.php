<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik - Login</title>
</head>
<body>
    <div class="login-container">
        <!-- Logo Image -->
        <div class="profile-icon">
            <img src="hospital.jpg" alt="Logo Klinik">
        </div>
        
        <h2>Login</h2>
        
        <!-- Formulir login diarahkan ke ceklogin.php -->
        <form action="ceklogin.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <p><a href="forgot_password.php">Forgot your password?</a></p>
        </form>

        <!-- Pesan error jika login gagal -->
        <?php
        if (isset($_GET['error'])) {
            echo '<p style="color: red;">Username atau Password salah. Silakan coba lagi.</p>';
        }
        ?>
    </div>

    <!-- Style CSS Inline -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('background poliklinik.jpg') no-repeat center center;
            background-size: cover;
            margin: 0;
        }

        .login-container {
            width: 350px;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #ffffff;
        }

        .profile-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 50%;
            background-color: white;
        }

        .profile-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin: 12px 0 5px;
            color: #ddd;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            background-color: #333;
            color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            box-shadow: 0px 4px 12px rgba(255, 255, 255, 0.4);
            background-color: #444;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            transform: scale(1.05);
        }

        .login-container p {
            margin-top: 15px;
            font-size: 13px;
            color: #bbb;
        }

        .login-container p a {
            color: #ff416c;
            text-decoration: none;
        }

        .login-container p a:hover {
            text-decoration: underline;
        }

        /* Optional: Simple fade-in animation for the login container */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container {
            animation: fadeIn 0.8s ease-in-out;
        }
    </style>
</body>
</html>
