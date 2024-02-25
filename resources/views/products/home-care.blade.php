<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.95); 
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); 
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        h1 {
            color:  #ff8800;
            margin-bottom: 20px;
            width: 100%; 
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: calc(33.33% - 20px);
            max-width: 300px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        .product img {
            width: 100%;
            max-width: 200px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: transform 0.3s; 
        }
        .product:hover {
            transform: translateY(-5px); 
        }
        .product img:hover {
            transform: scale(1.05); 
        }
        .product h3 {
            color:  #ff8800;
            margin-bottom: 10px;
        }
        .product p {
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Home Care Products</h1>
        <div class="product">
            <img src="https://down-id.img.susercontent.com/file/b95ab68d2c709136821b454148e042de" alt="Product Image">
            <h3>Rinso</h3>
            <p>Rinso diluncurkan di Indonesia sebagai merek detergen pertama di negara ini.Akan tetapi, sebenarnya ini adalah merek yang paling lazim digunakan di Amerika Serikat, Inggris dan Australia sejak tahun 1918. Namun rinso ditempatkan di Indonesia yang memiliki potensi yang besar. Dan itu terbukti dengan Rinso yang menjadi pemimpin nomor satu deterjen di Indonesia.
            </p>
            <p>Price: Rp 2.000</p>
        </div>
        <div class="product">
            <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/1/10/5839014/5839014_3b216850-b03e-4b71-964a-716055793ce9_2048_2730.jpg.webp?ect=4g" alt="Product Image">
            <h3>Super Pell</h3>
            <p>Super Pell merupakan pembersih lantai dengan formula Cif Advanced Shine. Formula itu telah terbukti untuk menjadikan  wangi alaminya bertahan setiap hari. Super Pell dapat digunakan di semua ruangan di rumah. Kini super pell tersedia dalam enam pilihan aroma alami, yaitu Fresh Apple, Lemon Ginger, Cherry Rose, Lavender, Gold dan, Love Blossom.</p>
            <p>Price: Rp 2.000</p>
        </div>
        <div class="product">
            <img src="https://down-id.img.susercontent.com/file/7070cb75615e5006031a6a38a7cb94e3" alt="Product Image">
            <h3>Sunlight</h3>
            <p>Sunlight sendiri sudah tersedia di Indonesia sejak lebih dari 25 tahun yang lalu. Lalu sunlight diluncurkan dalam bentuk cair yang menjadikannya sebagai produk cuci piring pertama di Indonesia. Sunlight selalu menawarkan solusi terbaik untuk membersihkan peralatan masak dan peralatan dapur dari semua jenis kotoran, bau dan lemak.</p>
            <p>Price: Rp20.000</p>
        </div>
    </div>
</body>
</html>
