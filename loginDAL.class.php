<?php
//loginDAL.class.php
class LoginDAL
{ 
   
 public function CheckLoginCredential($username,$password)
 { 
    $conn = new mysqli("localhost","root","======","my_app");

 if(!$conn){
     die("Connection faild: ".mysqli_connect_error());
 }
      $sql = "SELECT username, password FROM users WHERE username = '$username' && password ='$password'";
      $result = $conn->query($sql);
      $isValid = false; 
         if(mysqli_num_rows($result) > 0){
           while($row = $result->fetch_assoc($result)) {
               echo $row ['username'];
               echo $row ['password'];
              }
           {
              $isValid = true;
           }
           }return $isValid;

  }
  
 }  
?>        
 


       

