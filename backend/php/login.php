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
      
     $take="SELECT phone_no,name,password FROM clients";

     $result=$conn->query($take);
       
      
          
            if($result->num_rows > 0){
    
            $count=0;
            while($count<5){

                if(isset($_POST['login_user'])){
                    $user=$_POST['username'];
                    $pass=$_POST['password'];
                
                $row=$result->fetch_assoc();
                $dehash=md5($pass);
                $view=$row['password'];
                if($user===$row['phone_no']&& $dehash===$view){
                    require("./index.php");

                    echo "<h2 class='log'>Logged in as  "."".$row['name'] ."<div rel='log'><button rel='btn-log' class='btn-log'>log out</button></div></h2>";
                   
                    
                    exit();
                    

                }  elseif($user==="admin" && $pass==="admin"){
                   // echo "logged as "+"admin";
                    require("./admin.php");
                    exit();
                    
                } else{
                  require("./index.php");
                echo "<p class='redisplay'>SIGN UP FIRST</p>";
                exit();
                }
               
            }
            $count++;

            } 
        }else {
            require("./index.php");
                echo "<p class='redisplay'>NO REGISTERED USER FOR THE PLATFORM</p>";
            }
      

            

    $conn->close();
 ?>