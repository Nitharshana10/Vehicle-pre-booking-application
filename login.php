<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION["user_email"] = $email;
        header("Location: booking.php"); // redirect to booking page after login
        exit();
    } else {
        $message = "Invalid email or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Vehicle Booking</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://images.unsplash.com/photo-1533473359331-0135ef1b58bf'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .form-container {
            width: 400px;
            margin: 100px auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px black;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        a {
            color: #ffc107;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Login</h2>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <a href="register.php">← Don't have an account? Register</a>
    </div>
</body>
</html>
