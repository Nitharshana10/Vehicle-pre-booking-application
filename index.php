<!DOCTYPE html>
<html>
<head>
    <title>Welcome - Vehicle Booking System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://images.unsplash.com/photo-1533473359331-0135ef1b58bf'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 40px;
            text-align: center;
        }

        .buttons {
            display: flex;
            gap: 30px;
        }

        .buttons a {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .buttons a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>Welcome to Vehicle Booking System</h1>
<p>Book your ride in advance with ease.</p>
        <div class="buttons">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
