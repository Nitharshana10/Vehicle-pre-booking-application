<!-- booking_page.php -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book a Vehicle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1525609004556-c46c7d6cf023') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
            color: white;
            margin: 0;
            padding: 0;
        }

        .box {
            background: rgba(0, 0, 0, 0.6);
            margin: 100px auto;
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
        }

        h1 {
            margin-bottom: 20px;
        }

        a.button {
            padding: 12px 25px;
            margin: 10px;
            background-color: #00c853;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 18px;
        }

        a.button:hover {
            background-color: #00b248;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Welcome to Vehicle Booking</h1>
    <p>Start your booking process below.</p>
    <a href="booking.php" class="button">Book Now</a>
    <a href="logout.php" class="button">Logout</a>
</div>

</body>
</html>
