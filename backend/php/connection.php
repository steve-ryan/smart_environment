<?php
$hostname="localhost";
$username="root";  
$password=""; 
$database="smart_environment";      


$conn = new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
{
    die('Connection Failed'.$conn->connect_error);
} 

$sql = "CREATE DATABASE IF NOT EXISTS smart_environment";

if($conn->query($sql)=== TRUE){
   //echo "smart_environment database created";
} else{
    require("./index.php");
    echo "<p class='redisplay'>server error occured</p>".$conn->error;
}



?>