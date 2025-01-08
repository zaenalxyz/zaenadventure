<?php
session_start();

// Mengambil data keranjang dari sesi
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Fungsi untuk menghitung total keseluruhan
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $product) {
        $total += floatval($product['price']) * $product['quantity'];
    }
    return $total;
}

// Jika pengguna mengonfirmasi checkout
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $address = htmlspecialchars(trim($_POST['address']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $payment_method = htmlspecialchars(trim($_POST['payment_method']));

    // Cek validitas email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid");
    }

    // Validasi metode pembayaran
    if (empty($payment_method)) {
        die("Metode pembayaran harus dipilih");
    }

    // Cek jika keranjang kosong
    if (empty($cart)) {
        header("Location: produk.php?error=Keranjang%20belanja%20anda%20kosong.%20Silakan%20melakukan%20transaksi%20dahulu.");
        exit();
    }

    // Proses checkout sesuai dengan metode pembayaran
    switch ($payment_method) {
        case 'transfer':
            // Logika untuk proses pembayaran melalui transfer bank
            break;
        case 'cod':
            // Logika untuk pembayaran Cash on Delivery
            break;
        case 'credit_card':
            // Logika untuk pembayaran menggunakan kartu kredit
            break;
        default:
            die("Metode pembayaran tidak valid");
    }

    // Kosongkan keranjang
    $_SESSION['cart'] = [];
    header("Location: konfirmasi_checkout.php"); // Redirect ke halaman terima kasih
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - ZAEN Adventure Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 40px;
            background-color: #222;
        }
        .logo img {
            width: 70px;
            height: 70px;
        }
        .checkout-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .checkout-form {
            display: flex;
            flex-direction: column;
        }
        .checkout-form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .checkout-form input, .checkout-form select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .checkout-form button {
            padding: 10px;
            background-color: rgb(24, 221, 34);
            color: white;
            border: none;
            cursor: pointer;
        }
        .checkout-form button:hover {
            background-color: rgb(29, 236, 70);
        }
        .total-amount {
            text-align: right;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #222;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="A.jpg" alt="ZAEN Logo">
        </div>
    </header>

    <div class="checkout-container">
        <h1>Detail Checkout</h1>
        <form method="POST" class="checkout-form">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Alamat Pengiriman:</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="payment_method">Metode Pembayaran:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="transfer">Transfer Bank</option>
                <option value="cod">Cash on Delivery (COD)</option>
                <option value="credit_card">Kartu Kredit</option>
            </select>

            <div class="total-amount">
                Total Keseluruhan: Rp <?php echo number_format(calculateTotal($cart), 0, ',', '.'); ?>
            </div>

            <button type="submit">Konfirmasi Checkout</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. All rights reserved.</p>
    </footer>
</body>
</html>