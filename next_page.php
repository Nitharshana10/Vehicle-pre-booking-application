<?php
// Retrieve data from URL query parameters
$vehicle_name = $_GET['vehicle_name'] ?? 'N/A';
$vehicle_rate = $_GET['vehicle_rate'] ?? '0';
$pickup_date = $_GET['pickup_date'] ?? 'N/A';
$return_date = $_GET['return_date'] ?? 'N/A';
$total_amount = $_GET['total_amount'] ?? '0';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: rgba(255, 250, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }

        h2 {
            color: #00695c;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .button {
            padding: 10px 22px;
            margin: 15px 10px 0;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #004d40;
        }

        .orange {
            background-color: #f57c00;
        }

        .orange:hover {
            background-color: #e65100;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Your Vehicle Has Been Successfully Booked!</h2>
        <p><strong>Vehicle:</strong> <?= $vehicle_name ?></p>
        <p><strong>Amount Paid:</strong> ₹<?= $total_amount ?></p>
        <p><strong>Pickup Date:</strong> <?= $pickup_date ?></p>
        <p><strong>Return Date:</strong> <?= $return_date ?></p>

        <!-- Refund button -->
        <form action="refund.php" method="POST" style="display: inline;">
            <button type="submit" class="button orange">Request Refund</button>
        </form>

        <!-- Logout button -->
        <a href="index.php" class="button">Logout</a>
    </div>
</body>
</html>
