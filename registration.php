<?php 

session_start();
header('location:login.php');


$hostname="localhost";
$username="root";
$password="";
$database="smart_environment";

$con = mysqli_connect($hostname,$username,$password,$database);
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];                                 
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$s = "SELECT * FROM username WHERE name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	//$_SESSION['msg'] = "Username Already Taken";
    echo "Username Already Taken";
}else{
    $hashed = hash('md5', $password);
    $reg = "INSERT INTO usertable(name, username, email, phone, password) 
    VALUES('$name', '$username', '$email', '$phone', '$hashed')";
    mysqli_query($con, $reg);
    echo "Registration Succesful";
 
}

?>