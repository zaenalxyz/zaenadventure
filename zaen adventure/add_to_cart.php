<?php
session_start();

// Jika form tambah ke keranjang telah di-submit
if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];  // Ambil ID produk dari form
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productImage = $_POST['product_image'];

    // Produk yang akan ditambahkan ke keranjang
    $product = [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1,
        'image' => $productImage
    ];

    // Periksa apakah keranjang sudah ada di sesi
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Tambahkan produk ke keranjang (atau update kuantitas jika sudah ada)
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity'] += 1; // Jika produk sudah ada, tambahkan kuantitas
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $product; // Jika produk belum ada, tambahkan ke keranjang
    }

    // Redirect kembali ke halaman keranjang
    header("Location: keranjang.php");
    exit();
}
?>
