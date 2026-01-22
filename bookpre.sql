-- USERS TABLE
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    password VARCHAR(100)
);

INSERT INTO users (name, email, phone, password) VALUES
('Alice Johnson', 'alice@example.com', '1234567890', 'alice123'),
('Bob Smith', 'bob@example.com', '0987654321', 'bob123');

-- ADMINS TABLE
CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE,
    password VARCHAR(100)
);

INSERT INTO admin (username, password) VALUES
('admin1', 'admin123');

-- VEHICLES TABLE
CREATE TABLE vehicles (
    vehicle_id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(100),
    vehicle_type VARCHAR(50),
    license_plate VARCHAR(20) UNIQUE,
    price_per_day DECIMAL(10,2),
    availability BOOLEAN DEFAULT TRUE
);

INSERT INTO vehicles (model, vehicle_type, license_plate, price_per_day, availability) VALUES
('Toyota Camry', 'Sedan', 'ABC1234', 45.00, TRUE),
('Honda CRV', 'SUV', 'XYZ5678', 60.00, TRUE);

-- DRIVERS TABLE
CREATE TABLE drivers (
    driver_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    license_number VARCHAR(50) UNIQUE,
    availability BOOLEAN DEFAULT TRUE
);

INSERT INTO drivers (name, phone, license_number, availability) VALUES
('John Driver', '1112223333', 'D123456789', TRUE),
('Emily Wheels', '4445556666', 'D987654321', TRUE);

-- BOOKINGS TABLE
CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    vehicle_id INT,
    driver_id INT,
    pickup_date DATE,
    return_date DATE,
    total_days INT,
    total_amount DECIMAL(10,2),
    status VARCHAR(20) DEFAULT 'Booked',
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(vehicle_id),
    FOREIGN KEY (driver_id) REFERENCES drivers(driver_id)
);

INSERT INTO bookings (user_id, vehicle_id, driver_id, pickup_date, return_date, total_days, total_amount) VALUES
(1, 1, 1, '2025-05-15', '2025-05-17', 2, 90.00);

-- PAYMENTS TABLE
CREATE TABLE payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT,
    payment_date DATE,
    amount_paid DECIMAL(10,2),
    payment_method VARCHAR(50),
    payment_status VARCHAR(20) DEFAULT 'Completed',
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id)
);

INSERT INTO payments (booking_id, payment_date, amount_paid, payment_method) VALUES
(1, '2025-05-11', 90.00, 'Credit Card');

-- REFUNDS TABLE
CREATE TABLE refunds (
    refund_id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id INT,
    refund_date DATE,
    refund_amount DECIMAL(10,2),
    reason VARCHAR(255),
    status VARCHAR(20) DEFAULT 'Processed',
    FOREIGN KEY (payment_id) REFERENCES payments(payment_id)
);

INSERT INTO refunds (payment_id, refund_date, refund_amount, reason) VALUES
(1, '2025-05-12', 90.00, 'User cancelled before trip');
