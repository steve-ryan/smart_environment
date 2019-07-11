<?php
require("./connection.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_environment";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$quer="SELECT * FROM seedlings ";

$result=$conn->query($quer);
$rows=$result->fetch_all(MYSQLI_ASSOC);
 
$json_array=array();


$json_array=$rows;
echo json_encode($json_array);
 

?>