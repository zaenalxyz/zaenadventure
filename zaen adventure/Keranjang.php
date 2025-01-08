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

// Fungsi untuk menghapus item dari keranjang
function removeItem($productId, &$cart) {
    foreach ($cart as $key => $product) {
        if ($product['id'] == $productId) {
            unset($cart[$key]);
            break;
        }
    }
}

// Fungsi untuk memperbarui kuantitas item di keranjang
function updateQuantity($productId, $quantityChange, &$cart) {
    foreach ($cart as &$product) {
        if ($product['id'] == $productId) {
            $newQuantity = $product['quantity'] + $quantityChange;
            $product['quantity'] = max(1, $newQuantity);
            break;
        }
    }
}

// Proses untuk menambah atau mengurangi kuantitas
if (isset($_GET['update_quantity_id'])) {
    $productId = $_GET['update_quantity_id'];
    $quantityChange = intval($_GET['quantity_change']);
    updateQuantity($productId, $quantityChange, $cart);
    $_SESSION['cart'] = $cart;
    header("Location: keranjang.php");
    exit();
}

// Proses penghapusan item
if (isset($_GET['remove_id'])) {
    $removeId = $_GET['remove_id'];
    removeItem($removeId, $cart);
    $_SESSION['cart'] = $cart;
    header("Location: keranjang.php");
    exit();
}

// Fungsi untuk menampilkan keranjang dalam bentuk tabel
function displayCart($cart) {
    if (empty($cart)) {
        echo "<p>Keranjang belanja Anda kosong!</p>";
    } else {
        echo '<table class="cart-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Foto</th>'; // Kolom untuk foto
        echo '<th>Produk</th>';
        echo '<th>Harga</th>';
        echo '<th class="quantity-header">Kuantitas</th>'; // Tambahkan kelas untuk kolom kuantitas
        echo '<th>Total</th>';
        echo '<th>Aksi</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($cart as $product) {
            echo '<tr>';
            echo '<td><img src="' . $product['image'] . '" alt="' . $product['name'] . '" class="thumbnail"></td>'; // Menampilkan foto
            echo '<td>' . $product['name'] . '</td>';
            echo '<td>Rp ' . number_format(floatval($product['price']), 0, ',', '.') . '</td>';
            echo '<td>
                    <div class="quantity-container">
                        <form method="GET" style="display:inline;">
                            <input type="hidden" name="update_quantity_id" value="' . $product['id'] . '">
                            <button type="submit" name="quantity_change" value="-1" class="quantity-btn">-</button>
                            <span class="quantity-number">' . $product['quantity'] . '</span>
                            <button type="submit" name="quantity_change" value="1" class="quantity-btn">+</button>
                        </form>
                    </div>
                  </td>';
            echo '<td>Rp ' . number_format(floatval($product['price']) * $product['quantity'], 0, ',', '.') . '</td>';
            echo '<td>
                    <form method="GET" style="display:inline;">
                        <input type="hidden" name="remove_id" value="' . $product['id'] . '">
                        <button type="submit" class="remove-item" onclick="return confirmDelete();">Hapus</button>
                    </form>
                  </td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '<div class="cart-total">';
        echo '<h3>Total Keseluruhan: Rp ' . number_format(calculateTotal($cart), 0, ',', '.') . '</h3>';
        // Tombol Checkout
        echo '<form method="GET" action="checkout.php">
                <button type="submit" class="checkout-btn">Checkout</button>
              </form>';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - ZAEN Adventure Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            background-color: #222;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
        }

        header .logo img {
            width: 70px;
            height: 70px;
        }

        header h1 {
            margin-left: 20px;
            white-space: nowrap;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Keranjang Belanja Styles */
        .cart-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            flex: 1; /* Memungkinkan konten untuk mengisi ruang yang tersisa */
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th, .cart-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .cart-table th {
            background-color: #222;
            color: white;
        }

        .quantity-header {
            width: 150px; /* Lebarkan kolom kuantitas */
        }

        .thumbnail {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .quantity-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-number {
            margin: 0 10px;
            font-weight: bold;
            min-width: 30px;
            text-align: center;
        }

        .quantity-btn {
            background-color: #ccc;
            color: #333;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin: 0 5px;
        }

        .remove-item {
            background-color: #ff3300;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .remove-item:hover {
            background-color: #ff0000;
        }

        .cart-total {
            text-align: right;
            margin-top: 20px;
        }

        .checkout-btn {
            padding: 10px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #ff3300;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="A.jpg" alt="zaen Logo">
            <h1><b>ZAEN Adventure Store</b></h1>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="KERANJANG.php">Keranjang</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>

    <div class="cart-container">
        <h1><p align="center">Keranjang Belanja Anda</p></h1>
        <?php displayCart($cart); ?>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus item ini?');
        }
    </script>
    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>