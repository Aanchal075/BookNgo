<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form inputs
  $name = $_POST['name'];
  $email = $_POST['email'];
  $rating = $_POST['rating'];
  $message = $_POST['message'];

  // Connect to database
  $conn = new mysqli("localhost", "root", "", "bookngo");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert data into feedbacks table
  $sql = "INSERT INTO feedback (name, email, rating, message) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssis", $name, $email, $rating, $message);

  if ($stmt->execute()) {
    $status = "Thank you for your feedback!";
  } else {
    $status = "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Feedback - BookNGo</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* Full page center */
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
      background-color:rgba(109, 108, 101, 0.92);
    }

    .feedback-box {
      max-width: 700px;
      margin: 30px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
       border: 1px solid #555;
      background:#9a939346;
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
      background-color:rgba(176, 107, 4, 0.92);
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    form button:hover {
      background-color:rgba(176, 107, 4, 0.92);
      scale:1.2;
    }

    footer {
      background-color:rgba(176, 107, 4, 0.92);
      color: white;
      text-align: center;
      padding: 10px;
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
        <h1>Feedback</h1>
      </header>
        <nav>
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <a href="feedback.php">Feedback</a>
          <a href="logout.php">Logout</a>
        </nav>
      
    <div class="feedback-box">
      <div class="form">
      <h2>Give your valuable feedback!!</h2>
      <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <label for="rating">Rating:</label>
        <select name="rating" required>
          <option value="">--Select--</option>
          <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
          <option value="4">⭐⭐⭐⭐ Very Good</option>
          <option value="3">⭐⭐⭐ Good</option>
          <option value="2">⭐⭐ Fair</option>
          <option value="1">⭐ Poor</option>
        </select>
        <br><br>
        <textarea name="message" placeholder="Your feedback..." required></textarea>
        <button type="submit">Submit Feedback</button>
      </form>
      </div>
</div>
      <?php if (isset($status)) echo "<p class='message'>$status</p>"; ?>

      <footer>
        <p>&copy; 2025 BookNGo. All rights reserved.</p>
      </footer>
    

</body>
</html>
