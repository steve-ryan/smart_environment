<?php
$connection = mysqli_connect("localhost","root","","smart_environment");

if($connection === false){
    die("ERROR:unable to connect".mysqli_connect_error());
}

$name =  mysqli_real_escape_string($connection,$_REQUEST['name']);
$price =  mysqli_real_escape_string($connection,$_REQUEST['price']);
$path =  mysqli_real_escape_string($connection,$_REQUEST['path']);

$sql= "INSERT INTO "
?>