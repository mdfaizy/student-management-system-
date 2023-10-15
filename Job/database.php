<?php

// $hostName = "localhost";
// $dbUser = "root";
// $dbPassword = "";
// $dbName = "login_register";
// $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// if (!$conn) {
//     die("Something went wrong;");
// }
// echo "conncted successfully";

$servername = "localhost";
$username = "root";
$password = "";
$database = "login_register";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>