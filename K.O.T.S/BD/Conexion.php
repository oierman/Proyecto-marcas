<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
