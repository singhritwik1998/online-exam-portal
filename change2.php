<?php
session_start();
$idd = $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user SET stop_id=1 ,start_id=0 WHERE username='$idd';";
// echo $id;
if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . $conn->error;
}
// echo $id;

   session_destroy();
  

$conn->close();
?>
