<?php

  //logoutBL.class.php
 include_once "loginBL.class.php";
  
  class LogoutBL
  {
    public function LogoutUser()
    {
        $loginBL = new LoginBL();
        $isLogged = $loginBL->IsUserloggedIn();
        
        if ($isLogged)
        {
            unset ($_session["username"]);
            session_destroy();
        }
        
        header("Location:index.php");
        exit;
    }  
  } 
?>