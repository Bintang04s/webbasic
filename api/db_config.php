<?php
$host = "localhost";
$username = "root";
$password = "#Bintang_04s";
$db = "webbasic";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
 echo "Connected successfully"; 
}
?>