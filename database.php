<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo"ulandi";
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}