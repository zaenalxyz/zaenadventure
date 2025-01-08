<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAEN Adventure Store - Dashboard</title>
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

        /* Slider styles */
        .slider {
            width: 100%;
            margin: 50px auto;
            position: relative;
            overflow: hidden;
        }

        .slides {
            display: flex;
            width: 168%;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 60%;
            border-radius: 10px;
        }

        .slider-buttons {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .slider-buttons button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 15px;
            cursor: pointer;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
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

    <!-- Slider -->
    <div class="slider">
        <div class="slides">
            <img src="1.png" alt="Adventure 1">
            <img src="2.png" alt="Adventure 2">
        </div>
        <div class="slider-buttons">
            <button onclick="prevSlide()">&#10094;</button>
            <button onclick="nextSlide()">&#10095;</button>
        </div>
    </div>
    <section class="adventure-section">
    <div class="adventure-content">
        <h1><span>Mendaki Lebih Tinggi,</span> Menjelajah Lebih Jauh,<br> Bersama <strong>ZAEN Adventure!</strong></h1>
        <p class="adventure-description">
            Kami di ZAEN Adventure Store siap membantumu menaklukkan setiap medan. Dari perlengkapan hiking hingga survival, kami menyediakan semua kebutuhanmu untuk bertualang tanpa batas. Jelajahi alam bebas dengan keyakinan, keberanian, dan persiapan terbaik. Bersama ZAEN, tak ada perjalanan yang terlalu jauh atau gunung yang terlalu tinggi untuk ditaklukkan.
        </p>
    </div>
</section>

<style>
    .adventure-section {
        background-image: url('adventure-bg.jpg'); /* Gambar latar belakang yang relevan */
        background-size: cover;
        background-position: center;
        padding: 80px 20px;
        color: white;
        text-align: center;
        position: relative;
    }

    .adventure-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Efek gelap pada gambar latar */
        z-index: 1;
    }

    .adventure-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
    }

    .adventure-content h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
        line-height: 1.2;
        letter-spacing: 2px;
    }

    .adventure-content h1 span {
        color: #ff6600; /* Warna cerah untuk menarik perhatian */
        display: block;
    }

    .adventure-content strong {
        color: #ffd700; /* Warna emas untuk memberi kesan premium */
    }

    .adventure-description {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-top: 20px;
        color: #e0e0e0;
    }

    /* Animasi teks */
    .adventure-content h1 {
        animation: slideInFromBottom 1.5s ease-out;
    }

    .adventure-description {
        animation: fadeIn 2s ease-out;
    }

    @keyframes slideInFromBottom {
        from {
            opacity: 0;
            transform: translateY(50px);
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
</style>

    <section class="growth-section">
    <div class="growth-content">
        <h1>Tumbuh <span>Untuk Mereka</span></h1>
        <p class="growth-subtitle">Alasan untuk Kita Jadi Lebih Baik</p>
        <p class="growth-description">
            Tahun Baru adalah tentang Pertumbuhan, Pembelajaran, dan Membuat Perbedaan. Mari saling menginspirasi untuk menghasilkan versi terbaik dari diri kita sendiri. Bersama, kita bisa membawa perubahan positif dan memberikan dampak nyata.
        </p>
    </div>
</section>

<style>
    .growth-section {
        background-color: #f4f4f4;
        padding: 50px 20px;
        text-align: center;
    }

    .growth-content h1 {
        font-size: 3rem;
        font-weight: bold;
        color: #222;
        margin-bottom: 20px;
    }

    .growth-content h1 span {
        color: #ff6600; /* Warna yang lebih menarik dan mencolok */
    }

    .growth-subtitle {
        font-size: 1.5rem;
        color: #555;
        margin-bottom: 20px;
        font-style: italic;
    }

    .growth-description {
        font-size: 1.2rem;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Tambahan efek animasi */
    .growth-content h1 {
        animation: fadeInUp 1s ease-out;
    }

    .growth-description {
        animation: fadeInUp 2s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

    <script>
        let currentSlide = 0;

        function showSlide(slideIndex) {
            const slides = document.querySelector('.slides');
            const totalSlides = slides.children.length;
            if (slideIndex >= totalSlides) {
                currentSlide = 0;
            } else if (slideIndex < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = slideIndex;
            }
            slides.style.transform = `translateX(-${currentSlide * 60}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(() => {
            nextSlide();
        }, 5000);


        
    
    </script>
    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
