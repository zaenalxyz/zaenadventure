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

    // Cek validitas email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid");
    }

    // Proses checkout dan simpan ke database (jika ada)
    // Kemudian kosongkan keranjang
    $_SESSION['cart'] = [];
    header("Location: thank_you.php"); // Redirect ke halaman terima kasih
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
        body { font-family: Arial, sans-serif; }
        .checkout-container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; }
        .checkout-form { display: flex; flex-direction: column; }
        .checkout-form label { margin-bottom: 5px; font-weight: bold; }
        .checkout-form input { margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .checkout-form button { padding: 10px; background-color: #ff6600; color: white; border: none; cursor: pointer; }
        .checkout-form button:hover { background-color: #ff3300; }
        .total-amount { text-align: right; font-size: 1.5rem; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>
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

            <div class="total-amount">
                Total Keseluruhan: Rp <?php echo number_format(calculateTotal($cart), 0, ',', '.'); ?>
            </div>

            <button type="submit">Konfirmasi Checkout</button>
        </form>
    </div>
</body>
</html>