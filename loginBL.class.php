<?php 
//loginBL.class.php
   include_once "loginDAL.class.php";
   include_once "dbconn.class.php";      

 class LoginBL{
    
   public function LoginUser() 
   {
     if(isset($_POST ["username"],$_POST ["password"]))
     {
        $username = trim ($_POST ["username"]);
        $password = trim ($_POST ["password"]);
   
      $isValid = $this->validateLoginCredentials($username, $password);
         if ($isValid)
         {
             $loginDAL = new LoginDAL();
             $ischecked = $loginDAL->CheckLoginCredential($username,$password);
            
             if ($ischecked)
             {
               $_session["username"] = $username;
               header("Location:Home.php");
               exit;
             }
             else
             {
                 echo "Username and/or are incorrect";
             }
         }
         else
         {
              echo "Username and\or password not entered in the field ";
         }
     }
   }
   public function IsUserloggedIn()
   {
      $isLogged = false;
       if (isset($_session["username"]))
       {
           $isLogged = true;
       }
       
       return $isLogged;
       
   }
   public function RedirectUserToLoginPage()
   {
       $isLogged = $this->IsUserloggedIn();
       if (!$isLogged)
       {
         header("Location:index.php");
               exit;  
       }
   }
   public function RedirectUserToHomePage()
   {
       $isLogged = $this->IsUserloggedIn();
       if (!$isLogged)
       {
         header("Location:Home.php");
               exit;  
       }
   }
   private function validateLoginCredentials($username, $password)
   { 
       return true;
   }      
 }
?>