<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk ZAEN Adventure Store</title>
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

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: white;
        }

        .product-item {
            border: 1px solid #ddd;
            background-color: white;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product-item:hover {
            transform: scale(1.05);
        }

        .product-item img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: contain;
        }

        .product-item h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-item p {
            font-size: 16px;
            color: #666;
        }

        .product-item button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .product-item button:hover {
            background-color: #0056b3;
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

    <section class="products">
        <!-- Produk 1 -->
         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/f5c049a0f144e19f1c85558a0d49ec8c.webp" alt="Produk 1">
            <h3>THERNO-Z 1.2</h3>
            <p>Rp 229.000</p>
            <button onclick="window.location.href='PRODUK 1.php'">Detail</button>
         </div>

        <!-- Produk 2 -->
         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/8f13c2d7-96b5-4dae-ae8f-1e4dba5c35c6.jpg" alt="Produk 2">
            <h3>HUANCAVELICA BEANIES</h3>
            <p>Rp 99.000</p>
            <button onclick="window.location.href='PRODUK 2.php'">Detail</button>
         </div>

        <!-- Produk 3 -->
         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/49c7a83de5609223e96d9c1d47d1785a.webp" alt="Produk 3">
            <h3>Titan-500-ml</h3>
            <p>Rp 395.100</p>
            <button onclick="window.location.href='PRODUK 3.php'">Detail</button>
         </div>

        <!-- Produk 4 -->
         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/8ae69b7547ec1e18a47e5315114ef96b.webp" alt="Produk 4">
            <h3>TRECENTO TORCH</h3>
            <p>Rp 269.100</p>
            <button onclick="window.location.href='PRODUK 4.php'">Detail</button>
         </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/d680ec1acb219acfa472eeadb3ec9a43.webp" alt="Produk 4">
            <h3>TITAN 350 MLH</h3>
            <p>Rp 323.100</p>
            <button onclick="window.location.href='PRODUK 5.php'">Detail</button>
         </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/eac2491186ad16a2f11b092d2e9e79e3.webp" alt="Produk 4">
            <h3>COOKING SET 2.0</h3>
            <p>Rp 359.100</p>
            <button onclick="window.location.href='PRODUK 6.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/bc4d6ee23329f62f02422761bcee5248.webp" alt="Produk 4">
            <h3>STRATO LIGHTWEIGHT COT</h3>
            <p>Rp 1.376.100</p>
            <button onclick="window.location.href='PRODUK 7.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/c35db61b-180f-4e3d-938d-2506ff173195.jpg" alt="Produk 4">
            <h3>X-STORMSEEKER PANTS</h3>
            <p>Rp 365.400</p>
            <button onclick="window.location.href='PRODUK 8.php'">Detail</button>
            </div>
    
          <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/e7c126e3-67b0-4575-a8e7-509f28908eb1.jpg" alt="Produk 4">
            <h3>ALTO HIKE PANTS</h3>
            <p>Rp 593.100</p>
            <button onclick="window.location.href='PRODUK 9.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/56c45d2b-5c85-4a12-81b6-e2a901161671.jpg" alt="Produk 4">
            <h3>ALPINIST WARMER JACKET</h3>
            <p>Rp 455.200</p>
            <button onclick="window.location.href='PRODUK 10.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/51b75f17-7704-4611-bf1e-de87f5322962.jpg" alt="Produk 4">
            <h3>CALIDUM 250 DUO SB</h3>
            <p>Rp 615.200</p>
            <button onclick="window.location.href='PRODUK 11.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/e89a9254-bd01-4076-8b6c-47ce24402628.jpg" alt="Produk 4">
            <h3>FOLDABLE STOOL</h3>
            <p>Rp 179.100</p>
            <button onclick="window.location.href='PRODUK 12.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/734da7d7-830d-42eb-a6d5-2cfa5ca58aea.jpg" alt="Produk 4">
            <h3>STRATO 50 HAULER BAG</h3>
            <p>Rp 789.000</p>
            <button onclick="window.location.href='PRODUK 13.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/2836dd35922239465a1aee3eaf59797d.webp" alt="Produk 4">
            <h3>NOVUS GUARDIAN 8P</h3>
            <p>Rp 5.259.000</p>
            <button onclick="window.location.href='PRODUK 14.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/0592266f-959e-4928-81a1-2c97208a348b.jpg" alt="Produk 4">
            <h3>BARTELSI LED HEADLAMP</h3>
            <p>Rp 188.100</p>
            <button onclick="window.location.href='PRODUK 15.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/b7be476d-f917-4a4f-a623-0e8feec5898b.webp" alt="Produk 4">
            <h3>CAMP CHAIR 2.0</h3>
            <p>Rp 548.100</p>
            <button onclick="window.location.href='PRODUK 16.php'">Detail</button>
            </div>

            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/910009112_Image1_1_2dfc.jpg" alt="Produk 4">
            <h3>GIANT PANGOLIN 4P</h3>
            <p>Rp 3.289.000</p>
            <button onclick="window.location.href='PRODUK 17.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/cacb57fe-1b19-43dc-b686-b4d66b95293a.jpg" alt="Produk 4">
            <h3>KALAHARI BEANIES</h3>
            <p>Rp 132.300 </p>
            <button onclick="window.location.href='PRODUK 18.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/07c1adeb-6a41-4722-9ea8-96781354f7aa.jpg" alt="Produk 4">
            <h3>WINDEST DOUBLE 1.0</h3>
            <p> Rp 449.100</p>
            <button onclick="window.location.href='PRODUK 19.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/100efdee-c36e-4e26-b0f6-d87aa8d9743c.webp" alt="Produk 4">
            <h3>WINDEST SINGLE 1.0</h3>
            <p>Rp 422.100</p>
            <button onclick="window.location.href='PRODUK 20.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/910004893_YELLOW_1_e278.webp" alt="Produk 4">
            <h3>SHIPTON 3P</h3>
            <p>Rp 2.239.000</p>
            <button onclick="window.location.href='PRODUK 21.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/910004892_RED_1_fb81.webp" alt="Produk 4">
            <h3>STOVER 4P</h3>
            <p>Rp 2.399.000</p>
            <button onclick="window.location.href='PRODUK 22.php'">Detail</button>
            </div>

        
            <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/910006878_BLACK_1_65c6.webp" alt="Produk 4">
            <h3>COMPACT STOOL</h3>
            <p>Rp 224.100</p>
            <button onclick="window.location.href='PRODUK 23.php'">Detail</button>
            </div>

         <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/910007215_OLIVE_1_4166.webp" alt="Produk 4">
            <h3>RECTANGULAR TARP M</h3>
            <p>Rp 429.000</p>
            <button onclick="window.location.href='PRODUK 24.php'">Detail</button>
            </div>

        <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/media/web/910007270_CREAM_1_d167.webp" alt="Produk 4">
            <h3>GOTLANDER 2IN1 MULTI JACKET </h3>
            <p>Rp 962.100</p>
            <button onclick="window.location.href='PRODUK 25.php'">Detail</button>
            </div>

        <div class="product-item">
            <img src="https://d1yutv2xslo29o.cloudfront.net/product/variant/photo/04260cfb-3b26-4258-8fb6-81ad75f32aef.jpg" alt="Produk 4">
            <h3>COOLER BOX 30L</h3>
            <p>Rp 809.100</p>
            <button onclick="window.location.href='PRODUK 26.php'">Detail</button>
            </div>
        
    </section>

    <footer>
        <p>&copy; 2025 ZAEN Adventure Store. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
