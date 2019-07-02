<?php
$hostname="localhost";
$username="root";  
$password="";       
$database="smart_environment"; 

$conn = new mysqli_connect($hostname,$username,$password,$database);

if($conn->connect_error)
{
    die('Connection Failed'.$conn->connect_error);
} else {
    echo "connection SUCCEEDED";
}

?>
