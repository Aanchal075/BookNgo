<?php include('db.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOTEL Accommodation</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: 
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('images/background.jpg') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
    }

    header {
      background: rgba(145, 96, 235, 0.85);
      color: #fff;
      padding: 32px 0 18px 0;
      text-align: center;
      border-radius: 0 0 18px 18px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.08);
      margin-bottom: 18px;
    }

    nav {
      background: rgba(107, 101, 109, 0.92);
      text-align: center;
      border-radius: 8px;
      margin: 0 16px 24px 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }

    nav a {
      color: #fff;
      display: inline-block;
      padding: 14px 28px;
      text-decoration: none;
      font-weight: 500;
      letter-spacing: 1px;
      transition: background 0.2s;
      border-radius: 4px;
    }

    nav a:hover {
      background:rgb(98, 3, 105);
      color: #fff;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 32px 20px;
      background: rgba(255,255,255,0.92);
      border-radius: 12px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.10);
      text-align:center;
    }

    .hotel-listings {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 28px;
    }

    .hotel-card {
      background:rgb(199, 199, 236);
      border: 1px solid #e0e0e0;
      border-radius: 10px;
      padding: 18px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      transition: transform 0.15s;
    }

    .hotel-card:hover {
      transform: translateY(-6px) scale(1.03);
      box-shadow: 0 6px 24px rgba(0,0,0,0.13);
    }

    .hotel-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .hotel-card h3 {
      margin: 10px 0 5px;
      color: #007BFF;
    }

    .hotel-card p {
      font-size: 15px;
      color: #444;
      margin-bottom: 4px;
    }

    .btn {
      margin-top: 12px;
      display: inline-block;
      padding: 10px 18px;
      background:rgb(76, 4, 76);
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: 500;
      transition: background 0.2s;
    }

    .btn:hover {
      background:rgb(72, 4, 103);
    }

    footer {
      background: rgba(128, 85, 123, 0.85);
      color: #fff;
      text-align: center;
      padding: 18px;
      margin-top: 36px;
      border-radius: 18px 18px 0 0;
      box-shadow: 0 -2px 12px rgba(0,0,0,0.08);
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to BookNGo</h1>
    <p>Find the best Paying Guest Accommodations near you</p>
  </header>

 <nav>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="feedback.php">Feedback</a>
  <a href="logout.php">Logout</a>
  
</nav>

  <div class="container">
    <h2 style="text-align:center; margin-bottom:20px;">HOTELS</h2>
    <div class="hotel-listings">
      <!-- Sample Static HOTEL Cards -->
      <div class="hotel-card">
        <img src="image.avif" alt="Hotel Image">
        <h3>Hotel Maurya</h3>
        <p>Location:Patna</p>
        <p>Price: ₹6551</p>
        <a href="book.php" class="btn">Book Now</a>
       
      </div>

      <div class="hotel-card">
        <img src="images1.jpeg" alt="Hotel Image">
        <h3>Hyatt Palace Bodh Gaya</h3>
        <p>Location: Gaya Ji</p>
        <p>Price: ₹7552</p>
        <a href="book.php" class="btn">Book Now</a>
       
      </div>

      <div class="hotel-card">
         <img src= "image8.jpeg" alt="Hotel Image" style="height: 180px; width:150 ;">
        <h3>Matfair Hostel</h3>
        <p>Location: Purnea</p>
        <p>Price: ₹5000</p>
        <a href="book.php" class="btn">Book Now</a>
        
      </div>
  </div>
    <div>
       <a href="viewmore.php" class="btn">view more Hotels</a>
    </div>
    <div>
   <footer>
    &copy; 2025 BookNGo. All Rights Reserved.
  </footer>
  
</body>
</html>
