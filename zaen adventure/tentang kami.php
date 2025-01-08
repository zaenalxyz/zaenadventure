<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami - Zaen Adventure Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            line-height: 1.6;
        }
        .about-section {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Zaen Adventure Store</h1>
</header>

<div class="container">
    <div class="about-section">
        <h1>Tentang Kami</h1>
        <p>
            <?php
                // Teks tentang perusahaan
                $deskripsi = "Zaen Adventure Store adalah toko perlengkapan outdoor yang berdedikasi untuk menyediakan kebutuhan petualangan alam Anda. Kami menyediakan berbagai macam perlengkapan outdoor mulai dari tenda, jaket, tas gunung, hingga aksesoris hiking dan camping. Dengan komitmen untuk memberikan produk berkualitas dan pelayanan terbaik, kami siap mendukung setiap langkah petualangan Anda.";
                echo $deskripsi;
            ?>
        </p>

        <h2>Visi Kami</h2>
        <p>
            <?php
                // Teks visi
                $visi = "Menjadi toko perlengkapan outdoor terdepan yang menginspirasi dan mendukung para petualang di seluruh Indonesia.";
                echo $visi;
            ?>
        </p>

        <h2>Misi Kami</h2>
        <ul>
            <?php
                // Misi perusahaan dalam bentuk array
                $misi = [
                    "Menyediakan produk outdoor berkualitas tinggi dengan harga terjangkau.",
                    "Mendukung gaya hidup sehat dan petualangan melalui produk-produk inovatif.",
                    "Membangun komunitas yang solid bagi para pecinta alam dan petualangan."
                ];

                // Loop untuk menampilkan misi
                foreach ($misi as $item) {
                    echo "<li>$item</li>";
                }
            ?>
        </ul>

        <h2>Nilai-nilai Kami</h2>
        <p>
            <?php
                // Teks nilai-nilai perusahaan
                $nilai = "Kami percaya pada kekuatan petualangan untuk mempererat hubungan manusia dengan alam. Oleh karena itu, kami selalu berusaha untuk memberikan produk yang ramah lingkungan dan berkelanjutan.";
                echo $nilai;
            ?>
        </p>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Zaen Adventure Store. Semua hak dilindungi undang-undang.</p>
</footer>

</body>
</html>
