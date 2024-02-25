<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby and Kid Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); 
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
            width: calc(45% - 20px);
            max-width: 400px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 1.1); 
        }
        .product img {
            width: 100%;
            max-width: 200px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: transform 0.3s; 
        }
        .product:hover {
            transform: scale(1.05); 
        }
        .product img:hover {
            transform: scale(1.1); 
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
        <h1>Baby and Kid Products</h1>
        <div class="product">
            <img src="https://down-id.img.susercontent.com/file/sg-11134201-22120-9jg8uv5ofskv15" alt="Product Image">
            <h3>Mustela Travel Kit</h3>
            <p>Kehadiran sang buah hati tentunya menjadi momen kebahagiaan tersendiri bagi Anda yang baru saja menjadi orang tua. Oleh karena itu, pastinya Anda membutuhkan produk bayi dengan kualitas terbaik bukan? Salah satu merk produk bayi yang berkualitas premium yaitu Mustela. Merk tersebut menjual aneka produk khusus bayi secara satuan dan secara satu paket. Anda dapat memilihnya sesuai dengan kebutuhan.</p>
            <p>Price: Rp142.524</p>
        </div>
        <div class="product">
            <img src="https://down-id.img.susercontent.com/file/21573ea36353358980198546c82ff894" alt="Product Image">
            <h3>Konicare Paket Big Hug</h3>
            <p>Rekomendasi merk produk bayi terbaik dan berkualitas yang dapat Anda beli yakni dari Konicare. Merk tersebut menyediakan sejumlah produk yang berfungsi untuk merawat kulit bayi secara optimal. Pastinya aman digunakan untuk bayi Anda ya karena sudah mendapatkan sertifikat BPOM. Teksturnya begitu lembut dan tidak membuat kulit bayi Anda jadi alergi atau iritasi.</p>
            <p>Price: Rp128.600</p>
        </div>
        <div class="product">
            <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98o-lr9yo16tp37da5" alt="Product Image">
            <h3>Parfum Zwitsalbaby / Zwitsbaby / Switsal Baby EDP Baby - BPOM - Parfum pria dan wanita 35 ml</h3>
            <p>Zwitsal memang sudah dipercaya sejak tahun 1972 oleh para ibu sebagai merk produk bayi dan terpercaya. Merk ini menyediakan berbagai rangkaian perawatan bayi yang telah lulus uji Hypo-Allergenic sehingga aman digunakan pada kulit sensitif bayi sekalipun. Bayi baru lahir pun dapat menggunakan serangkaian produk dari Zwitsal karena memang diformulasikan dengan bahan yang lembut untuk keamanan penggunaan pada bayi.</p>
            <p>Price: Rp20.600</p>
        </div>
    </div>
</body>
</html>
