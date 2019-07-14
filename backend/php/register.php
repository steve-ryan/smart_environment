<?php
require("./connection.php");
$hostname="localhost";
$username="root";
$password="";
$database="smart_environment";

//creating connection
$conn=new mysqli($hostname,$username,$password,$database);
  if($conn->connect_error){
      die ("connection failed to establish".$conn->connect_error);
  }
  
  if(isset($_POST['reg_user'] )){
    if(isset($_POST['username'] )){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);


}
if(isset($_POST['password_1'] )){
    $password=mysqli_real_escape_string($conn,$_POST["password_1"]);
    


}


    $phone=mysqli_real_escape_string($conn,$_POST["phone"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    
    $confirm_password=mysqli_real_escape_string($conn,$_POST["password_2"]);
    

    if($password != $confirm_password){
        echo "Your password values dont match";
        exit();
    }
    $client_check = "SELECT * FROM clients WHERE name='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $client_check);
    $client = mysqli_fetch_assoc($result);

     if ($client) {
    if ($client['name'] === $username) {
      echo "Username already exists";
      exit();
    }

    if ($client['email'] === $email) {
      echo "email already exists";
      exit();
    }
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
if(isset($_POST['username'])&& isset($_POST['phone'])){

$username=mysqli_real_escape_string($conn,$_POST["username"]);
$phone=mysqli_real_escape_string($conn,$_POST["phone"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$password=mysqli_real_escape_string($conn,$_POST["password_1"]);
$encry=md5($password);
$state->execute();}

  
require("./login_client.php");
//echo "client registered successfully";


$state->close();
$conn->close();
?>