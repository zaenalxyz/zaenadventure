<?php
// Variabel error untuk menampilkan pesan kesalahan
$error = '';

// Proses login jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi login (di sini menggunakan username dan password statis)
    $valid_username = 'zaenal';
    $valid_password = '123';

    // Mengecek apakah username dan password sesuai
    if ($username === $valid_username && $password === $valid_password) {
        // Jika valid, arahkan ke halaman dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        // Jika tidak valid, tampilkan pesan error
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with Image Background</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('logo.png'); 
            background-position: center; 
            background-repeat: no-repeat;
            background-size: 1500px; 
        }

        
        .login-container {
            z-index: 1;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.13); 
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .form-input {
            margin-bottom: 15px;
        }

        .form-input input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-input input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .login-btn {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            text-decoration: none;
            color: #007BFF;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <?php if (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="POST">
        <div class="form-input">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="login-btn">Login</button>
    </form>
    <div class="forgot-password">
        <a href="#">Forgot Password?</a>
    </div>
</div>