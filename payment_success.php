<?php
// Simulate data (In practice, retrieve from database)
$vehicle_name = $_POST['vehicle_name'] ?? 'N/A';
$vehicle_rate = $_POST['vehicle_rate'] ?? '0';
$pickup_date = $_POST['pickup_date'] ?? 'N/A';
$return_date = $_POST['return_date'] ?? 'N/A';
$total_amount = $_POST['total_amount'] ?? '0';
$payment_method = $_POST['payment_method'] ?? 'N/A'; // Get payment method chosen

// Generate GPay QR Code URL (replace with actual link)
$gpay_qr_code_url = "https://pvccardprinting.in/wp-content/uploads/2023/12/gpay-qr-code.webp"; // Your actual QR URL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            padding: 40px;
            text-align: center;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .qr-code {
            margin-top: 20px;
        }
        .qr-code img {
            width: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Payment Successful</h2>
        <p><strong>Vehicle:</strong> <?= $vehicle_name ?></p>
        <p><strong>Amount Paid:</strong> ₹<?= $total_amount ?></p>
        
        <!-- Display the QR code once -->
        <?php if ($payment_method === 'gpay'): ?>
            <div class="qr-code">
                <p>Scan the QR code for GPay payment:</p>
                <img src="<?= $gpay_qr_code_url ?>" alt="GPay QR Code">
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Redirect to the next page after 10 seconds with GET parameters
        setTimeout(function() {
            window.location.href = "next_page.php?vehicle_name=<?= urlencode($vehicle_name) ?>&vehicle_rate=<?= urlencode($vehicle_rate) ?>&pickup_date=<?= urlencode($pickup_date) ?>&return_date=<?= urlencode($return_date) ?>&total_amount=<?= urlencode($total_amount) ?>";
        }, 10000); // Redirect after 10 seconds
    </script>
</body>
</html> 