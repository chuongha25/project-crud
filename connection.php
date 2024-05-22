<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "haminhchuong2512";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
// Đóng kết nối
// mysqli_close($conn);
?>
