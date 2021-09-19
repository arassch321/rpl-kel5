<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $pdo_conn = new PDO("mysql:host=$servername;dbname=hinovid", $username, $password);
  // set the PDO error mode to exception
  $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>