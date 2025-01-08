<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIANT PANGOLIN 4P - ZAEN Adventure Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
        }

        .product-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .product-details {
            flex: 1;
            padding: 20px;
        }

        .product-details h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .product-details p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2rem;
            color: #ff6600;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .add-to-cart {
            padding: 15px 30px;
            background-color: #ff6600;
            color: white;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #ff3300;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            font-size: 1rem;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="A.jpg" alt="ZAEN Logo">
            <h1>ZAEN Adventure Store</h1>
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

    <div class="container">
        <div class="product-image">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/910009112_Image1_1_2dfc.jpg" alt="Thermo ">
        </div>
        <div class="product-details">
            <h2>GIANT PANGOLIN 4P</h2>
            <p>
            Bertualang di tengah kondisi cuaca dingin? Selain mengenakan jaket, pakai juga Kalahari Beanie untuk memastikan kepalamu tetap hangat. Saat camping, hiking, dan trekking, beanie dari EIGER Mountaineering ini terasa nyaman dan hangat berkat kombinasi merino wool dan poliester yang lembut dan ringan.
            <div class="price">Rp 3.289.000</div>
            <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="17"> 
                <input type="hidden" name="product_name" value="GIANT PANGOLIN 4P">
                <input type="hidden" name="product_price" value="3289000">
                <input type="hidden" name="product_image" value="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/910009112_Image1_1_2dfc.jpg">
                <button type="submit" name="add_to_cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. All Rights Reserved.</p>
    </footer>

</body>
</html>
