<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - ZAEN Adventure Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color:222;
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


        .content {
            padding: 60px 40px;
            text-align: center;
            background: linear-gradient(to right, #fff, #e0e0e0);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            max-width: 900px;
            border-radius: 15px;
        }

        .content h2 {
            font-size: 3rem;
            color: #ff3300;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            animation: slideIn 1.5s ease-out;
        }

        .content p {
            font-size: 1.3rem;
            color: #555;
            line-height: 1.8;
            margin-top: 20px;
            max-width: 700px;
            margin: 20px auto;
            animation: fadeIn 2s ease-out;
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

        /* Animasi */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Hover effect untuk konten */
        .content:hover {
            background: linear-gradient(to left, #fff, #f7f7f7);
            transform: scale(1.02);
            transition: all 0.4s ease-in-out;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="A.jpg" alt="ZAEN Logo">
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

    <div class="content">
        <h2>Tentang ZAEN Adventure Store</h2>
        <p>
            ZAEN Adventure Store didirikan dengan semangat petualangan yang tak terbatas. Kami berkomitmen untuk menyediakan perlengkapan outdoor terbaik untuk mendukung para petualang dalam mengeksplorasi alam bebas. Dengan berbagai pilihan produk mulai dari peralatan hiking hingga perlengkapan survival, kami siap menemani Anda dalam setiap langkah perjalanan.
        </p>
        <p>
            Kami percaya bahwa setiap petualangan adalah pengalaman yang berharga, dan kami ada di sini untuk memastikan Anda siap menghadapi segala tantangan. Dengan kualitas produk yang terjamin dan layanan pelanggan yang ramah, ZAEN Adventure Store menjadi pilihan utama bagi para petualang sejati.
        </p>
        <p>
            Mari jelajahi dunia bersama ZAEN Adventure Store dan nikmati kebebasan dalam bertualang!
        </p>
    </div>

    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
