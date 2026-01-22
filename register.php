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

// Form submission handling
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);

    // Simple validation
    if ($name && $email && $phone && $password) {
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $password);
        if ($stmt->execute()) {
            $message = "Registration successful!";
header("Location: login.php");
        } else {
            $message = "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Vehicle Booking</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://media.istockphoto.com/id/689344120/vector/life-is-a-journey-enjoy-the-ride-motivational-quote-vintage-retro-automobile-icon-vector.jpg?s=2048x2048&w=is&k=20&c=8s_H8p163JbTFT03UJYdxB1b-KcrLSzoZrpCkWV1h1o='); /* Replace with preferred image */
            background-size:500px 650px;
            background-position: upper;
            font-family: Arial, sans-serif;
            color: white;
        }

        .form-container {
            width: 400px;
            margin: 80px auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px black;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
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
        <h2>User Registration</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
        </form>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <a href="login.php">← Already have an account? Login</a>
    </div>
</body>
</html>
