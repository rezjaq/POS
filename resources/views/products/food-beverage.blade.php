<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby and Kid Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://cdn.yummy.co.id/content-images/images/20231201/4b8fb53ae21e244366c8befb97bd68bf.jpg?x-oss-process=image/format,webp');
            background-size: cover;
            background-position: center;
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
            border-radius: 95px;
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
            max-width: 230px;
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
        <h1>Food Specialty drinks collaboration with Kopi Janji Jiwa</h1>
        <div class="product">
            <img src="https://manfaat.co/wp-content/uploads/2023/02/Untitled-design-81.png" alt="Product Image">
            <h3>Hamburg Curry Mayo</h3>
            <p>Hamburg Curry Mayo merupakan roti toast mempunyai isian coleslaw, daging sapi saus kari dan potongan keju. Daging dari toast-nya memiliki tekstur empuk dan enak. Saus karinya bahkan membuat menu ini kaya akan rasa. Sedangkan buat coleslaw atau saladnya menambah kesegaran ketika kamu menyantap toast Hamburg Curry Mayo ini.</p>
            <p>Price: Rp 35.000</p>
        </div>
        <div class="product">
            <img src="https://cdn.yummy.co.id/content-images/images/20231201/931f23112cfb62012ebb9b7ae754fb2c.jpeg?x-oss-process=image/format,webp" alt="Product Image">
            <h3>Soy Matcha Latte</h3>
            <p>Minuman ini menggabungkan kedelai dengan matcha tea. Kombinasi kedua bahan tersebut memberikan tekstur yang creamy dan sedikit kental. Kelezatan rasa kedelainya juga menonjol dengan cukup dominan.</p>
            <p>Price:  Rp 26.000</p>
        </div>
        <div class="product">
            <img src="https://manfaat.co/wp-content/uploads/2023/02/Untitled-design-84.png" alt="Product Image">
            <h3>Beef Truffle Mayo</h3>
            <p>Beef Truffle Mayo adalah menu Jiwa Toast dari Janji Jiwa patut dicoba. Pasalnya, menu Beef Truffle Mayo ini hasil kolaborasi dari Janji Jiwa dan Chef William Gozali. Beef Truffle Mayo toast dengan mempunyai isian omelet, potongan keju, potongan beef patty dan termasuk truffle mayo. </p>
            <p>Price:  Rp 35.000</p>
        </div>
    </div>
</body>
</html>
