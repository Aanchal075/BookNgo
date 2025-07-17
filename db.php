<?php
$servername = "localhost";  // Change to your host (on InfinityFree it might be different)
$username = "root";         // Change to your DB username
$password = "";             // Change to your DB password
$dbname = "bookngo";        // Change to your DB name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
