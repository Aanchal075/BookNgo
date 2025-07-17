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
</head>
<body>

<h2>You have been logged out successfully.</h2>
<p>Redirecting to <a href="index.php">Login Page</a> in 3 seconds...</p>

</body>
</html>