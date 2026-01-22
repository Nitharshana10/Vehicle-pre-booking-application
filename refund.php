<!-- refund.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refund Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1504215680853-026ed2a45def') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background: rgba(250,250,255,0.9);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }

        textarea, input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="box">
        <h2>Refund Request</h2>
        <form action="refund_success.php" method="POST">
            <label for="reason">Reason for Refund:</label>
            <textarea name="reason" id="reason" rows="4" required></textarea>

            <label for="contact">Contact Information:</label>
            <input type="text" name="contact" id="contact" placeholder="Email or Phone" required>

            <button type="submit">Confirm Refund</button>
        </form>
    </div>

</body>
</html>
