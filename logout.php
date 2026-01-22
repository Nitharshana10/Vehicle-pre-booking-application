<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['feedback'])) {
    $rating = $_POST['rating'] ?? 'Not given';

    // Optional: Save the rating in a database or log it
    // For example: file_put_contents("feedback_log.txt", "Rating: $rating\n", FILE_APPEND);

    session_destroy(); // Destroy the session
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        h2 {
            color: #333;
        }

        label, select {
            display: block;
            margin: 15px 0 10px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #1976d2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Thank You!</h2>
        <p>Your session has been logged out.</p>
        <form method="POST">
            <label for="rating">Please rate your experience:</label>
            <select name="rating" id="rating" required>
                <option value="">--Select a rating--</option>
                <option value="5">Excellent (5)</option>
                <option value="4">Very Good (4)</option>
                <option value="3">Good (3)</option>
                <option value="2">Fair (2)</option>
                <option value="1">Poor (1)</option>
            </select>
            <button type="submit" name="feedback">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
