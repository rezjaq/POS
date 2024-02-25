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
        <h1>Beauty Health Products</h1>
        <div class="product">
            <img src="https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/Healthy_Glow_Skin_Perfector.webp" alt="Product Image">
            <h3>Healthy Glow Skin Perfector</h3>
            <p>Description: Healthy Glow Skin dalam botol untuk kulit yang tampak muda dan bercahaya! Ini adalah hibrida serum minyak dengan minyak bergizi yang tidak terasa berminyak, secara instan memberi Anda tampilan bercahaya dan terhidrasi dengan baik yang bertahan sepanjang hari dan mengubah tampilan kulit yang lelah dan kusam menjadi lebih cerah.</p>
            <p>Price: Rp 98.800</p>
        </div>
        <div class="product">
            <img src="https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/foundation_bnb_5.webp" alt="Product Image">
            <h3>Bloomatte Stay Confident 2-in-1 Foundation</h3>
            <p>Description: R2-in-1 foundation yang ringan dan tahan lama hingga 16 jam dilengkapi balm concealer yang dapat menghasilkan tampilan flawless natural-matte, mengandung skin-loving ingredients, yang cocok untuk semua jenis kulit. Non-comedogenic.</p>
            <p>Price: Rp 111.200</p>
        </div>
        <div class="product">
            <img src="https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/Mad_For_Makeup_Spotless_Second_Skin_Serum_Concealer_%28COVER%29.webp" alt="Product Image">
            <h3>Spotless Second Skin Serum Concealer</h3>
            <p>Description: ZSpotless No Crease Serum Concealer
                No Crease (Tidak Dempul)
                Ultra-Light (Ringan)
                High Enough to cover dark spots & acne scars
                3% Cica + 2% B3 + HA Serum
                Acne Safe & Clean (Aman untuk kulit berjerawat)
                Long-Lasting (Tahan Lama)
                Water permeable (Tembus Air)
                
                Creaseless & Eyebag-less
                Acne Safe & Clean
                Long-lasting & Water permeable
                Pigmented Enough to Cover
                Light enough to Layer
                Serum that Brightens & Hydrates</p>
            <p>Price: Rp 77.400</p>
        </div>
    </div>
</body>
</html>
