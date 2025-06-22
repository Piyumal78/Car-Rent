<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$db = "carform";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$lnumber = $_POST['lnumber'];
$pickupLocation = $_POST['pickuplocation'];
$droplocation = $_POST['droplocation'];
$pickDate = $_POST['pickDate'];
$picktime = $_POST['picktime'];
$returnDate = $_POST['returndate'];
$returnTime = $_POST['returntime'];
$carname = $_POST['carName'];
$summaryPeriod = $_POST['summaryPeriod'];        
$summarySubtotal = $_POST['summarySubtotal'];   
$summaryExtras = $_POST['summaryExtras'];        
$summaryTotal = $_POST['summaryTotal'];         

$gps = isset($_POST['gps']) ? 1 : 0;
$childSeat = isset($_POST['childSeat']) ? 1 : 0;
$additionalDriver = isset($_POST['additionalDriver']) ? 1 : 0;
$coverage = isset($_POST['Coverage']) ? 1 : 0;

// Clean summary values before inserting to DB
$summaryPeriod = (int) filter_var($summaryPeriod, FILTER_SANITIZE_NUMBER_INT);
$summarySubtotal = (int) filter_var($summarySubtotal, FILTER_SANITIZE_NUMBER_INT);
$summaryExtras = (int) filter_var($summaryExtras, FILTER_SANITIZE_NUMBER_INT);
$summaryTotal = (int) filter_var($summaryTotal, FILTER_SANITIZE_NUMBER_INT);

// Check or insert customer
$stmt = $conn->prepare("SELECT customer_id FROM customers WHERE email = ?");
if (!$stmt) die("❌ Prepare failed (customer select): " . $conn->error);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $customer = $result->fetch_assoc();
    $customerId = $customer['customer_id'];
} else {
    $stmt = $conn->prepare("INSERT INTO customers (first_name, last_name, email, phone_number, drivers_license_no) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) die("❌ Prepare failed (customer insert): " . $conn->error);
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $phone, $lnumber);
    $stmt->execute();
    $customerId = $stmt->insert_id;
}

// Get car_id from car name
$stmt = $conn->prepare("SELECT car_id FROM cars WHERE name = ?");
if (!$stmt) die("❌ Prepare failed (car select): " . $conn->error);
$stmt->bind_param("s", $carname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
    $carId = $car['car_id'];
} else {
    die("❌ Car not found in the database.");
}

// Insert booking
$stmt = $conn->prepare("INSERT INTO bookings (car_id, customer_id, pickup_date, pickup_time, return_date, return_time, pickup_location, drop_location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) die("❌ Prepare failed (booking insert): " . $conn->error);
$stmt->bind_param("iissssss", $carId, $customerId, $pickDate, $picktime, $returnDate, $returnTime, $pickupLocation, $droplocation);
$stmt->execute();
$bookingid = $stmt->insert_id;

// Insert additional options
$stmt = $conn->prepare("INSERT INTO additional_options (gps, childSeat, additionalDriver, coverage, booking_id, customer_id) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) die("❌ Prepare failed (additional options insert): " . $conn->error);
$stmt->bind_param("iiiiii", $gps, $childSeat, $additionalDriver, $coverage, $bookingid, $customerId);
$stmt->execute();
$options_id = $stmt->insert_id;

// Insert invoice
$stmt = $conn->prepare("INSERT INTO invoice (rental_period, sub_total, option_total, total, options_id, car_id) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) die("❌ Prepare failed (invoice insert): " . $conn->error);
$stmt->bind_param("iiiiii", $summaryPeriod, $summarySubtotal, $summaryExtras, $summaryTotal, $options_id, $carId);
if ($stmt->execute()) {
    $message = "✅ Booking and additional options successfully saved!";
    $msgClass = "success";
} else {
    $message = "❌ Failed to insert invoice: " . $stmt->error;
    $msgClass = "error";
}

// Fetch last invoice
$sql = "SELECT * FROM invoice ORDER BY invoice_id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $invoice_id = $row["invoice_id"];
    $rental_period = $row["rental_period"];
    $sub_total = $row["sub_total"];
    $option_total = $row["option_total"];
    $total = $row["total"];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Booking Summary</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #574964, #3e3b4f);
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 40px 20px;
      color: #333;
    }

    .message-box {
      text-align: center;
      margin-bottom: 30px;
      padding: 15px 25px;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      width: 100%;
      max-width: 500px;
    }

    .success {
      background-color: #e8f5e9;
      color: #2e7d32;
      border: 2px solid #66bb6a;
    }

    .error {
      background-color: #ffebee;
      color: #c62828;
      border: 2px solid #ef5350;
    }

    .booking-summary {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 30px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .booking-summary h1 {
      font-size: 28px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    .summary-item,
    .summary-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid #ddd;
    }

    .summary-total {
      font-size: 20px;
      font-weight: 600;
      color: #e74c3c;
      border-bottom: none;
    }

    .summary-label {
      font-weight: 500;
      color: #555;
    }

    .summary-value {
      color: #333;
    }

    @media screen and (max-width: 600px) {
      .booking-summary {
        padding: 20px;
      }

      .booking-summary h1 {
        font-size: 24px;
      }

      .summary-total {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <div class="message-box <?php echo $msgClass; ?>">
    <?php echo $message; ?>
  </div>

  <div class="booking-summary">
    <h1>Booking Summary</h1>

    <div class="summary-item">
      <span class="summary-label">Invoice ID:</span>
      <span class="summary-value"><?= htmlspecialchars($invoice_id) ?></span>
    </div>

    <div class="summary-item">
      <span class="summary-label">Rental Period:</span>
      <span class="summary-value"><?= htmlspecialchars($rental_period) ?> days</span>
    </div>

    <div class="summary-item">
      <span class="summary-label">Subtotal:</span>
      <span class="summary-value">LKR <?= htmlspecialchars($sub_total) ?></span>
    </div>

    <div class="summary-item">
      <span class="summary-label">Additional Options:</span>
      <span class="summary-value">LKR <?= htmlspecialchars($option_total) ?></span>
    </div>

    <div class="summary-total">
      <span>Total Cost:</span>
      <span>LKR <?= htmlspecialchars($total) ?></span>
    </div>
  </div>

</body>
</html>
