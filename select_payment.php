<?php
// Prevent "undefined index" warnings
$vehicle_name = $_POST['vehicle_name'] ?? '';
$vehicle_rate = $_POST['vehicle_rate'] ?? '';
$pickup_date = $_POST['pickup_date'] ?? '';
$return_date = $_POST['return_date'] ?? '';
$total_amount = $_POST['total_amount'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://i.pinimg.com/736x/1d/31/cc/1d31cc2d1340aa2f079e39b72f927e81.jpg') no-repeat center center fixed;
            background-size: cover;
            padding: 40px;
            text-align: center;
        }
        .box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .qr-section {
            display: none;
            margin-top: 20px;
        }
        .qr-section img {
            width: 250px;
            height: auto;
        }
        .payment-option {
            padding: 15px 30px;
            margin: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: white;
        }
        .gpay { background-color: #0f9d58; }
        .phonepe { background-color: #3b5998; }
        .paytm { background-color: #0033cc; }
        .cod { background-color: #f57c00; }
    </style>
    <script>
        function showQR(type) {
            const qrMap = {
                'gpay': 'images/gpay_qr.jpeg',
                'phonepe': 'images/gpay_qr.jpeg',
                'paytm': 'images/gpay_qr.jpeg'
            };
            document.getElementById("qr-image").src = qrMap[type];
            document.getElementById("paymentForm").payment_method.value = type;
            document.getElementById("qr-section").style.display = "block";
        }

        function submitCOD() {
            document.getElementById("paymentForm").payment_method.value = 'cod';
            document.getElementById("paymentForm").submit();
        }
    </script>
</head>
<body>
    <div class="box">
        <h2>Select Payment Method</h2>
        <p><strong>Total to Pay:</strong> ₹<?= htmlspecialchars($total_amount) ?></p>

        <form id="paymentForm" action="payment_success.php" method="POST">
            <input type="hidden" name="vehicle_name" value="<?= htmlspecialchars($vehicle_name) ?>">
            <input type="hidden" name="vehicle_rate" value="<?= htmlspecialchars($vehicle_rate) ?>">
            <input type="hidden" name="pickup_date" value="<?= htmlspecialchars($pickup_date) ?>">
            <input type="hidden" name="return_date" value="<?= htmlspecialchars($return_date) ?>">
            <input type="hidden" name="total_amount" value="<?= htmlspecialchars($total_amount) ?>">
            <input type="hidden" name="payment_method" value="">

            <button type="button" class="payment-option gpay" onclick="showQR('gpay')">Google Pay</button>
            <button type="button" class="payment-option phonepe" onclick="showQR('phonepe')">PhonePe</button>
            <button type="button" class="payment-option paytm" onclick="showQR('paytm')">Paytm</button>
            <button type="button" class="payment-option cod" onclick="submitCOD()">Cash</button>
        </form>

        <div id="qr-section" class="qr-section">
            <h3>Scan to Pay</h3>
            <img id="qr-image" src="" alt="QR Code">
            <p>Once payment is done, click below to confirm.</p>
            <button class="cod" onclick="document.getElementById('paymentForm').submit();">Payment Completed</button>
        </div>
    </div>
</body>
</html>

