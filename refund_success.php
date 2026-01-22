<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refund Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: #2e7d32;
            font-size: 26px;
        }

        p {
            font-size: 18px;
            margin: 20px 0;
        }

        .button {
            padding: 10px 22px;
            margin: 10px 10px;
            background-color: #0288d1;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #01579b;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Refund Successful</h2>
        <p>Your refund has been processed and will be credited shortly.</p>
        
        <!-- Book Again button -->
        <a href="booking.php" class="button">Book Again</a>

        <!-- Logout button -->
       <form action="logout.php" method="POST" style="display: inline;">
    <button type="submit" name="logout" class="button">Logout</button>
</form>


    </div>
</body>
</html>
