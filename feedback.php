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
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  background: linear-gradient(to right, #74ebd5,rgb(236, 82, 239));
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Centered container */
.feedback-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

/* Feedback box */
.feedback-box {
  background: #ffffff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 500px;
  width: 100%;
  text-align: center;
}

/* Header and nav styling */
.feedback-box header h1 {
  margin-bottom: 10px;
  color: #2d2d2d;
}

.feedback-box nav {
  margin-bottom: 20px;
}

.feedback-box nav a {
  text-decoration: none;
  color: #007bff;
  margin: 0 8px;
  font-weight: bold;
}

.feedback-box nav a:hover {
  text-decoration: underline;
}

/* Form elements */
.feedback-box form input,
.feedback-box form select,
.feedback-box form textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
}

.feedback-box form textarea {
  resize: none;
  height: 100px;
}

.feedback-box form button {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  border: none;
  color: white;
  font-size: 16px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.feedback-box form button:hover {
  background-color: #0056b3;
}

/* Success message */
.message {
  margin-top: 15px;
  font-weight: bold;
  color: green;
}

/* Footer */
.feedback-box footer {
  margin-top: 20px;
  font-size: 13px;
  color: #777;
}

  </style>
</head>
<body>
  <div class="feedback-container">
    <div class="feedback-box">
      <header>
        <h1>Feedback</h1>
        <nav>
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <a href="feedback.php">Feedback</a>
          <a href="logout.php">Logout</a>
        </nav>
      </header>

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
        <textarea name="message" placeholder="Your feedback..." required></textarea>
        <button type="submit">Submit Feedback</button>
      </form>

      <?php if (isset($status)) echo "<p class='message'>$status</p>"; ?>

      <footer>
        <p>&copy; 2025 BookNGo. All rights reserved.</p>
      </footer>
    </div>
  </div>
</body>
</html>
