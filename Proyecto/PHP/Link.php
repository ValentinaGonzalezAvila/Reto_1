<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_retoadmin";
$password = "J<HY8lIU)pfX&=+C";
$conn = new mysqli($serverName, $username, $password,"id17908676_retopostobon");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>