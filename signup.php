<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  if (mysqli_num_rows($check) > 0) {
    $msg = "Email already registered!";
  } else {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
      header("Location: login.php");
      exit();
    } else {
      $msg = "Error: " . mysqli_error($conn);
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <style>
    /* Reset & base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: linear-gradient(to right, #74ebd5,rgb(234, 170, 235));
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

h2 {
  margin-bottom: 20px;
  color: #4a4a4a;
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

form button:hover {
  background: #0056b3;
}

.message {
  margin-top: 10px;
  color: green;
  font-weight: bold;
}

.signup-box p {
  margin-top: 15px;
  font-size: 14px;
}

.signup-box a {
  color: #007bff;
  text-decoration: none;
}

.signup-box a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
    <h1>Welcome to BookNGo</h1><br>
  <h2>Signup</h2><br>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required />
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Register</button><br>
  </form>
  <?php if (isset($msg)) echo "<p>$msg</p>"; ?>
  <p>Already have an account? <a href="index.php">Login here</a>.</p>
</body>
</html>
