<?php
$hostname="localhost";
$username="root";  
$password="";       
$dbname="smart_environment";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
    die('Connection Failed'.$conn->connect_error);
} 

$sql = "CREATE DATABASE IF NOT EXISTS smart_environment";

if($conn->query($sql)=== TRUE){
   //echo "smart_environment database created";
} else{
    echo "failed creating database".$conn->error;
}



?>