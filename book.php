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
  background: url('background5.avif');
  background-size:cover;
  background-repeat:no-repeat;
  background-attachment:top;
  background-position:scroll;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

h1 {
  margin-bottom: 20px;
  color: #2d2d2d;
}
form{
    width: 60%;
    margin-left: 20%;
    border: 1px solid #555;
    background:#9a939346;
    padding: 10px;

}

form input {
  width: 90%;
  padding: 18px 15px;
  margin: 10px 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  box-shadow: 0 6px 12px rbga(0,0,0,0.5);
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
.form{
  
  
  

}

  </style>
</head>
<body>
  <h1>Welcome To BookNGo </h1>
  <h2>Book Your Stay </h2>
  <div class="form">
   
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
      <input type="date" name="checkout" placeholder="Checkout date" required /><br><br>
      </lable>
      <button type="submit">Confirm Booking</button><br><br><br>
    </form>
</div>

</body>
</html>
