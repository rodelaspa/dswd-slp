<?php 
// Server name must be localhost 
$servername = "localhost"; 
  
// In my case, user name will be root 
$username = "root"; 
  
// Password is empty 
$password = "";

$db = "slp_db"; 
  
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?> 