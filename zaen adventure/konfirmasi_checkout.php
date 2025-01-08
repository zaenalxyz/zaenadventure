<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Checkout - ZAEN Adventure Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 40px;
            background-color: #222;
            width: 100%;
        }
        .logo img {
            width: 70px;
            height: 70px;
        }
        .message {
            text-align: center;
            padding: 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 400opx;
             
        
        }
        .message h1 {
            color: #28a745;
            margin-bottom: 15px;
        }
        .message p {
            margin-bottom: 50px;
            line-height: 1.5;
        }
        .message img {
            width: 375px;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #e65c00;
        }
        footer {
            margin-top: 30px;
            text-align: center;
            padding: 10px;
            background-color: #222;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="A.jpg" alt="ZAEN Logo">
        </div>
    </header>

    <div class="message">
        <img src="data:image/jpeg;base64,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" alt="Terima Kasih">
        <h1>Terima Kasih!</h1>
        <p>Checkout Anda telah berhasil. Kami akan memproses pesanan Anda segera.</p>
        <p>Anda akan menerima email konfirmasi dalam waktu dekat.</p>
        <a href="dashboard.php" class="btn">Kembali ke Home</a>
    </div>

    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. All rights reserved.</p>
    </footer>
</body>
</html> 