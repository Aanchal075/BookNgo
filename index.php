<?php
session_start();

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  $user = mysqli_fetch_assoc($result);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: home.php");
    exit();
  } else {
    $msg = "Invalid credentials!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNGo</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      /* Reset & base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: url('background3.webp');
  background-size:cover;
  background-repeat:no-repeat;
  background-attachment:top;
  background-position:scroll;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  height: 100vh;
  display: flex;
  flex-direction :column;
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
  text-align: center;
  margin-bottom: 20px;
  color:rgb(4, 3, 3);
}

h2 {
  text-align:center;
  margin-bottom: 20px;
  color:rgb(11, 7, 7);
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
  color: red;
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
  <div class="background">
    <h1>Welcome to BookNGo</h1>
      
      <div class="form">
        <h2>Login</h2>
  <form method="POST">
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
  </form>
  <?php if (isset($msg)) echo "<p>$msg</p>"; ?>
  <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>
</div>
</div>
</body>
</html>