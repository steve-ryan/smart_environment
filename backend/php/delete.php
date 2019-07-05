<?php

$id = $_GET['id'];
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

// sql to delete a record
$sql = "DELETE FROM seedlings WHERE seedling_id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: admin.php');
    exit;
} else {
    echo "Error deleting record";
}

?>