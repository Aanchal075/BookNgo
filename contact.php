<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contacts (name, email, message) 
          VALUES ('$name', '$email', '$message')";

  if (mysqli_query($conn, $sql)) {
    $status = "Thank you! Your message has been received.";
  } else {
    $status = "Error submitting message. Please try again.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - BookNGo</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('background5.avif');
      background-size:cover;
      background-repeat:no-repeat;
      background-attachment:top;
      background-position:scroll;
    }

    header {
      background-color:rgba(213, 137, 5, 0.85);
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color:  rgba(176, 107, 4, 0.92);
      text-align: center;
    }

    nav a {
      color: white;
      padding: 14px 20px;
      display: inline-block;
      text-decoration: none;
    }

    nav a:hover {
      background-color:rgba(135, 83, 5, 0.92);
    }

    .contact-container {
      max-width: 700px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      
  background:#9a939346;
  box-shadow: 0 6px 12px rbga(0,0,0,0.5);
  display:flex-block;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    form button {
      padding: 10px 15px;
      background-color:rgb(156, 86, 1);
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    form button:hover {
      background-color:rgb(157, 86, 4);
    }

    footer {
      background-color:rgb(192, 111, 6);
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
    .form{
  border: 1px solid #555;
  background:#9a939346;
  padding:5px;
  margin:20px auto;
  box-shadow: 0 6px 12px rbga(0,0,0,0.5);
  display:flex-block;
}
  </style>
</head>
<body>

  <header>
    <h1>Contact Us</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="feedback.php">Feedback</a>
    <a href="logout.php">Logout</a>
    
  </nav>
<div class="contact-container">
  <div class="form">
    <h2>Get in Touch</h2>
    <form method="post" action="contact.php">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</div>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<p>Thank you for contacting us! We'll get back to you soon.</p>";
    }
    ?>

  <footer>
    &copy; 2025 BookNGo. All Rights Reserved.
  </footer>

</body>
</html>