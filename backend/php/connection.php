<?php
$hostname="localhost";
$username="root";  
$password="";       
$database="smart_environment"; 

$conn = new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
{
    die('Connection Failed'.$conn->connect_error);
} else {
    //echo "connection SUCCEEDED";
}



?>
