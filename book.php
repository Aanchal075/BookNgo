<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $hotel = $_POST['hotel'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];

  $sql = "INSERT INTO bookings (name, email, hotel, checkin, checkout) 
          VALUES ('$name', '$email', '$hotel', '$checkin', '$checkout')";

  if (mysqli_query($conn, $sql)) {
    echo "Booking successful! <a href='home.php'>Back to Home</a>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <style>
    body {
  background: linear-gradient(to right, #74ebd5,rgb(233, 178, 239));
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.container {
  text-align: center;
}

.signup-box {
  background: #ffffff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  max-width: 400px;
  margin: 0 auto;
}

h1 {
  margin-bottom: 20px;
  color: #2d2d2d;
}
form{
    width: 60%;
    margin-left: 20%;
}

form input {
  width: 100%;
  padding: 12px 15px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
}

form button {
  width: 100%;
  padding: 12px;
  background: #007bff;
  border: none;
  color: #fff;
  font-size: 16px;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s ease;
}

  </style>
</head>
<body>
  <h1>Welcome To BookNGo </h1>
  <h2>Book Your Stay </h2>
  <section id="booking-form" class="form-section">
   
    <form action="book.php" method="POST" onsubmit="return validateForm()">
    <lable>
    Enter Your name:
      <input type="text" name="name" placeholder="Your Name" required />
      </lable>
      <lable>
      Enter You E-mail
      <input type="email" name="email" placeholder="Your Email" required />
      </lable>
      <lable>
      Enter The Hotel Name
      <input type="text" name="hotel" placeholder="Hotel Name" required />
      </lable>
      <lable>
      Enter Checkin Date
      <input type="date" name="checkin" placeholder="Checkin date" required />
      </lable>
      <lable>
      Enter Checkout Date
      <input type="date" name="checkout" placeholder="Checkout date" required />
      </lable>
      <button type="submit">Confirm Booking</button><br>
    </form>
  </section>
</body>
</html>
