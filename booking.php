<!DOCTYPE html>
<html>
<head>
    <title>Book Your Vehicle</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://w0.peakpx.com/wallpaper/632/609/HD-wallpaper-mahindra-thar-car-parked-on-green-grass-car-parked-on-green-grass-black-car.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .form-container {
            width: 400px;
            margin: 100px auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px #000;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        input[type="date"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #17a2b8;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Book a Vehicle</h2>
        <form method="POST" action="available_vehicles.php">
            <label>Pickup Date:</label>
            <input type="date" name="pickup_date" required>

            <label>Return Date:</label>
            <input type="date" name="return_date" required>

            <input type="submit" value="Check Availability">
        </form>
    </div>
</body>
</html>
