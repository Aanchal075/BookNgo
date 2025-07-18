<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - BookNGo</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: url('background5.avif');
      background-size:cover;
      background-repeat:no-repeat;
     background-attachment:top;
    background-position:scroll; 
 
      min-height: 100vh;
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #fff;
    }
    .about-container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      line-height: 1.6;
      background: rgba(0,0,0,0.55); 
      border-radius: 12px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.18);
    }
    h1{
      text-align:center;
      color:black;
    }
     h2 {
      text-align: center;
      color: #ffe066; /* Light yellow for headings */
    }
    a {
      color: #ffd700;
      text-decoration: underline;
    }
    ul, p {
      color: #fff;
    }
    @media (max-width: 600px) {
      .about-container {
        padding: 10px;
      }
    }
    .about-container a[href="index.html"]:hover {
      background:rgb(242, 246, 47);
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <h1>About Our Hotel Services</h1>
  </header>

  <div class="about-container">
    <p>Welcome to <strong>BookNGo</strong> — your trusted partner for finding affordable and comfortable Hotels accommodations across the city.</p>
    <p>BookNGo is a plaform that help user find and block best-rated hotels near them easily.We ensure equality,comfort and convenience for all your stay.</p>
    <h2>Why Choose Us?</h2>
    <ul>
      <li>Verified Hotel Listings with Photos</li>
      <li>Simple Online Booking</li>
      <li>Direct Contact with the Hotel</li>
      <li>Safe, Secure & Hassle-free Process</li>
    </ul>

    <h2>Our Mission</h2>
    <p>We aim to bridge the gap between Hotel  and people searching for safe and budget-friendly accommodation. Whether you are a people, working family, or traveler, we make your stay easy and comfortable.</p>

    <h2>Contact & Support</h2>
    <p>Need help? Visit our <a href="contact.php">Contact Page</a> or email us at <strong>support@BookNGo.com</strong>.</p>

    <a href="home.php" style="
      display:inline-block;
      margin-top:24px;
      padding:12px 28px;
      background: rgba(176, 107, 4, 0.92);
      color:#fff;
      border-radius:6px;
      text-decoration:none;
      font-weight:600;
      font-size:16px;
      box-shadow:0 2px 8px rgba(0,0,0,0.10);
      transition:background 0.2s;
      border:none;
      cursor:pointer;
    ">Go to Home Page</a>
  </div>
</body>
</html>