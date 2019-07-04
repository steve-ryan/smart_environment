<?php
define("PASSWORD_ARGON2I",2);
$hostname="localhost";
$username="root";
$password="";
$database="smart_environment";

//creating connection
$conn=new mysqli($hostname,$username,$password,$database);
  if($conn->connect_error){
      die ("connection failed to establish".$conn->connect_error);
  }
  $db1="CREATE DATABASE IF NOT EXISTS smart_environment";
  $dbe="USE smart_environment";
  $conn->query($db1);
  $conn->query($dbe);

  if(isset($_POST['reg_user'])){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $phone=mysqli_real_escape_string($conn,$_POST["phone"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $password=mysqli_real_escape_string($conn,$_POST["password_1"]);
    $confirm_password=mysqli_real_escape_string($conn,$_POST["password_2"]);
    

    if($password != $confirm_password){
        echo "Your password values dont match";
        exit();
    }

}

  

$tbl= "CREATE TABLE IF NOT EXISTS clients(
    client_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    phone_no INT(20) NOT NULL,
    email VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(client_id)
    
    )";

if($conn->query($tbl)===TRUE){
   
   require("./register_clients.php");

} else{
    echo "Registration form loading failed".$conn->error;

}

//prepare statement for various registration of clients

$state=$conn->prepare("INSERT INTO clients(name,phone_no,email,password)
VALUES(?,?,?,?)");



$state->bind_param("siss",$username,$phone,$email,$encry);

//setting parameters to be executed

$username=$_POST["username"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];
$encry=md5($password);
$state->execute();

  

//echo "client registered successfully";


$state->close();
$conn->close();
?>