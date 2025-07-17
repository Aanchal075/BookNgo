<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="3;url=index.php">
    <title>Logging Out</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
  background: url('background3.webp');
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
</style>
</head>
<body>

<h2>You have been logged out successfully.</h2>
<p>Redirecting to <a href="index.php">Login Page</a> in 3 seconds...</p>

</body>
</html>