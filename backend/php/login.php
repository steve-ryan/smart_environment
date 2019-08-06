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



     

     if(empty($_POST['username'])){

        echo "Login error"."<a href='login_client.php'> Try again</a>";
        exit();
        
     } elseif(empty($_POST['password'])) {
        echo "Login error"."<a href='login_client.php'> Try again</a>";
        exit();


     } else{

        if(isset($_POST['username'])){

            $username=$_POST['username'];
          $password=$_POST['password'];
          $passhash=md5($password);
        
        
          
              
             $query=$conn->query("SELECT * FROM clients WHERE name='".$username."' and password='".$passhash."'LIMIT 3 ");
             $query2=$conn->query("SELECT * FROM clients WHERE name='".$username."' and password='".$passhash."' LIMIT 3 ");
            // $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
             $row=$query->fetch_assoc();
             $row1=$query2->fetch_assoc();
             echo json_encode($row);
        
            // $res=$query->fetch_assoc();
            if($username===$row1['name']){
                if($passhash===$row1['password']){
                require ("./admin.php");
                exit();
                }    

            }
        //    elseif($username===$row['name']){
        //         if($passhash===$row['password']){
        //             require ("./index2.php");
        //             exit();
        //         }
        //     }
            echo "Wrong credentials"."<a href='login_client.php'>please try again</a>";
            exit();
           
        



    
        }
    
    }




//      $result=$conn->query($take);
       
      
          
//             if($result->num_rows > 0){
    
//             $count=0;
//             while($count<5){

//                 if(isset($_POST['login_user'])){
//                     if(isset($_POST['username'])){
//                         $user=mysqli_real_escape_string($conn,$_POST['username']);
//                     }
// if(isset($_POST['password'])){
//     $pass=mysqli_real_escape_string($conn,$_POST['password']); 

                   
     
//                 }
//                 $row=$result->fetch_assoc();
//                 $dehash=md5($pass);
//                 $view=$row['password'];
//                 if($user===$row['username']&& $dehash===$view){
//                     require("./index2.php");

//                     echo "<h2 class='log'>Logged in as  "."".$row['name'] ."<div rel='log'><button rel='btn-log' class='btn-log'>log out</button></div></h2>";
                   
                    
//                     exit();
                    

//                 }  elseif($user==="admin" && $pass==="admin"){
//                 //     require("./admin.php"); 
//                 //    echo "logged as "+"admin";
                   
//                     require ("./index2.php");
//                     exit();
                    
//                 } else { 
//                     echo "<p class='redisplay'>SIGN UP FIRST</p>";
//                     require("./login.php");
                
//                 exit();
//                 }
               
//             }
//             $count++;

//             }}
//             require("./login_client.php");
//                 echo "<p class='redisplay'>NO REGISTERED USER FOR THE PLATFORM</p>";
            
           
      
//Dummy close
            

    $conn->close();
 ?>