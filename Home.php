<?php
  //Home.php
session_start();
include_once "loginBL.class.php";
$loginBL = new LoginBL();

?>
 
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Home</title>
     </head>
    <body>
       <nav>
        <ul class="menu">
        <div>
          <li class="item" > <a href="Home.php">Home</a></li></div>
          <div><li class="item"> <a href="news.php">News</a></li></div>
        <div><li class="item"> <a href="Comments.php">Comments</a></li></div>
        <div><li class="item"> <a href="logout.php">
        <button type="submit" name="submit" value="Logout"> Logout</button></a></li></div>
       </ul>
      </nav><br>
        <h1>Home</h1>
       <img src="img.app/home.jpg" class="center" >
     
    </body>  
</html>


      
      
  