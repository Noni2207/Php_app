<?php

  //News.php
session_start();

include_once "loginBL.class.php";
$loginBL = new LoginBL();
?>

<?php
$conn = new mysqli("localhost","root","========","my_app");

 if(!$conn){
     die("Connection faild: ".mysqli_connect_error());
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>News</title>
     </head>
    <body>
        
      <nav>
        <ul class="menu">
        <div><li class="item"> <a href="Home.php">Home</a></li></div>
        <div><li class="item"> <a href="news.php"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vesti</a></div>
            <div class="sub-menu-1">
               <ul> 
                 <li class="dropdown-item"><a href="politics.php"></a></li>
                 <li class="dropdown-item"><a href="sport.php.php"></a></li>
                 <li class="dropdown-item"><a href="science.php"></a></li>
               </ul> 
              </div>  
        <div><li class="item"> <a href="Comments.php">Comments</a></li></div>
       <div><li class="item"> <a href="logout.php">
        <button type="submit" name="submit" value="Logout"> Logout</button></a></li></div>
        </ul>
      </nav><br>
        
 <h1>News</h1><br>
        <nav class="nav-news"><ul class="menu">    
        <div><li class="item"> <a href="politics.php">Politics</a></li></div>
        <div><li class="item"> <a href="sport.php">Sport</a></li></div>
        <div><li class="item"> <a href="science.php">Science</a></li></div> 
       </ul> </nav><br>  
     <img src="img.app/vesti.jpeg" class="center" >         
</body>  
</html>




