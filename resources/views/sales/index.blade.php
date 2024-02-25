<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: silver;
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
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2); 
            max-width: 600px; 
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 2.5rem;
            animation: pulse 1.5s infinite alternate;
        }
        .product-image {
            width: 300px; 
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .product-image:hover {
            transform: scale(1.05);
        }
        .product-description {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 30px;
        }
        .cta-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            animation: fadeInUp 1s ease forwards;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.05);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Galaxy S24 | S24+
            Galaxy AI is here</h1>
        <img src="https://images.samsung.com/id/smartphones/galaxy-s24/images/galaxy-s24-highlights-kv.jpg?imbypass=true" alt="Product Image" class="product-image">
        <p class="product-description">Welcome to the era of mobile AI. With Galaxy S24 | S24+ in your hands, you can unleash whole new levels of creativity, productivity and possibility — starting with the most important device in your life. Your smartphone.
            Epic, just like that.</p>
        <a href="#" class="cta-button">Buy Now</a>
    </div>
</body>
</html>
