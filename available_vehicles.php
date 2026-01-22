<?php
$pickup = $_POST['pickup_date'];
$return = $_POST['return_date'];

// Sample static vehicles with individual rates
$vehicles = [
    ["name" => "Tata Safari", "image" => "https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-500x500.jpg", "rate" => 2000],
    ["name" => "Thar", "image" => "https://imgd.aeplcdn.com/370x208/n/qy7pp0b_1638615.jpg?q=80", "rate" => 2500],
    ["name" => "Bolero", "image" => "https://imgd.aeplcdn.com/642x336/n/cw/ec/131179/bolero-exterior-right-front-three-quarter-2.jpeg?isig=0&q=80", "rate" => 1800],
    ["name" => "Travels Bus", "image" => "https://www.jcrcab.com/wp-content/uploads/2021/09/luxury-bus.jpeg", "rate" => 30000],
    ["name" => "Innova Crysta", "image" => "https://imgd.aeplcdn.com/642x361/n/cw/ec/51506/toyota-innova-crysta-right-front-three-quarter1.jpeg?wm=1&q=80", "rate" => 3000],
["name" => "Omni", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrZTGjoS593L5enbfF6RVTdBCKRoShPy1r8Q&s", "rate" => 1000],
["name" => "travels van", "image" => "https://www.japjitravel.com/blog/wp-content/uploads/2017/05/Advantages-of-Hiring-a-Mini-Bus-Group-Trip.jpg", "rate" => 10000],
["name" => "Tourist bus", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_rnL4Dt0YqeoQ8-YI4olOSink-ZoRFywtcA&s", "rate" => 15000]


];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Vehicles</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        h2 {
            text-align: center;
        }

        .vehicle-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .vehicle {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
            padding: 15px;
        }

        .vehicle img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .vehicle h3 {
            margin: 10px 0;
        }

        .vehicle p {
            margin: 5px 0;
            font-size: 16px;
        }

        .vehicle button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .vehicle button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Available Vehicles from <?= htmlspecialchars($pickup) ?> to <?= htmlspecialchars($return) ?></h2>

    <div class="vehicle-list">
        <?php foreach ($vehicles as $v): ?>
            <div class="vehicle">
                <form action="billing.php" method="POST">
                    <input type="hidden" name="vehicle_name" value="<?= $v['name'] ?>">
                    <input type="hidden" name="vehicle_rate" value="<?= $v['rate'] ?>">
                    <input type="hidden" name="pickup_date" value="<?= htmlspecialchars($pickup) ?>">
                    <input type="hidden" name="return_date" value="<?= htmlspecialchars($return) ?>">
                    <img src="<?= $v['image'] ?>" alt="<?= $v['name'] ?>">
                    <h3><?= $v['name'] ?></h3>
                    <p>Rate: ₹<?= $v['rate'] ?> per day</p>
                    <button type="submit">Select</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
