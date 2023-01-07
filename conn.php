<?php
// $servername = "localhost";
// $username = "root";
// $password = "123456789";
// $dbname = "web2111";

$servername = "localhost";
$username = "it65309010003";
$password = "it12345";
$dbname = "it65309010003";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charest($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
