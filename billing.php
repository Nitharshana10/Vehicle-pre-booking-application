<?php
$vehicle_name = $_POST['vehicle_name'];
$vehicle_rate = $_POST['vehicle_rate'];
$pickup_date = $_POST['pickup_date'];
$return_date = $_POST['return_date'];

$days = (strtotime($return_date) - strtotime($pickup_date)) / (60 * 60 * 24);
$days = max($days, 1); // Ensure at least 1 day
$total = $vehicle_rate * $days;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Billing Details</title>
    <style>
        body {
            background: url('https://img1.wallspic.com/previews/1/3/5/1/21531/21531-ferrari-gran_turismo_sport-red-sportscar-car-550x310.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            padding: 40px;
            margin: 0;
        }

        .bill-box {
            background: rgba(255, 255, 255, 0.95);
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .details {
            font-size: 18px;
            line-height: 1.6;
        }

        .total {
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
        }

        .pay-button {
            margin-top: 30px;
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
        }

        .pay-button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="bill-box">
        <h2>Billing Summary</h2>
        <div class="details">
            <p><strong>Vehicle:</strong> <?= htmlspecialchars($vehicle_name) ?></p>
            <p><strong>Pickup Date:</strong> <?= htmlspecialchars($pickup_date) ?></p>
            <p><strong>Return Date:</strong> <?= htmlspecialchars($return_date) ?></p>
            <p><strong>Rate per day:</strong> ₹<?= $vehicle_rate ?></p>
            <p><strong>Days:</strong> <?= $days ?></p>
            <div class="total">Total Amount: ₹<?= $total ?></div>
        </div>

        <form action="select_payment.php" method="POST">
            <input type="hidden" name="vehicle_name" value="<?= htmlspecialchars($vehicle_name) ?>">
            <input type="hidden" name="vehicle_rate" value="<?= $vehicle_rate ?>">
            <input type="hidden" name="pickup_date" value="<?= $pickup_date ?>">
            <input type="hidden" name="return_date" value="<?= $return_date ?>">
            <input type="hidden" name="total_amount" value="<?= $total ?>">
            <button type="submit" class="pay-button">Pay</button>
        </form>
    </div>
</body>
</html>
