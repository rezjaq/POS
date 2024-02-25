<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="profile-img" src="https://tse3.explicit.bing.net/th?id=OIP.3IsXMskZyheEWqtE3Dr7JwHaGe&pid=Api&P=0&h=180" alt="Profile Image">
        <h1>User Profile</h1>
        <p>User ID: {{ $id }}</p>
        <p>User Name: {{ $name }}</p>
    </div>
</body>
</html>
