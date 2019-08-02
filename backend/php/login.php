<?php
   require("./connection.php");

   $hostname="localhost";
$username="root";
$password="";
$database="smart_environment";

//creating connection
$conn=new mysqli($hostname,$username,$password,$database);


// $query=mysqli_query($conn,"SELECT * FROM login WHERE username")



//Dummy start

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
                if($user===$row['username']&& $dehash===$view){
                    require("./index2.php");

                    echo "<h2 class='log'>Logged in as  "."".$row['name'] ."<div rel='log'><button rel='btn-log' class='btn-log'>log out</button></div></h2>";
                   
                    
                    exit();
                    

                }  elseif($user==="admin" && $pass==="admin"){
                   // echo "logged as "+"admin";
                    // require("./admin.php");
                    require ("./index2.php");
                    exit();
                    
                } else{
                  require("./index2.php");
                echo "<p class='redisplay'>SIGN UP FIRST</p>";
                exit();
                }
               
            }
            $count++;

            } 
        }else {
            require("./index2.php");
                echo "<p class='redisplay'>NO REGISTERED USER FOR THE PLATFORM</p>";
            }
      
//Dummy close
            

    $conn->close();
 ?>