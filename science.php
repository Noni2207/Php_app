<?php

  //science.php
session_start();

include_once "loginBL.class.php";
$loginBL = new LoginBL();
?>


<?php
       date_default_timezone_set('Europe/Oslo');
       include_once "comment.inc.php";

$conn = new mysqli("localhost","root","========","my_app");

 if(!$conn){
     die("Connection faild: ".mysqli_connect_error());
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Science</title>
     </head>
    <body>
        
      <nav>
        <ul class="menu">
        <div><li class="item"> <a href="Home.php">Home</a></li></div>
        <div><li class="item"> <a href="news.php">News</a></div>
        <div><li class="item"> <a href="Comments.php">Comments</a></li></div>
       <div><li class="item"> <a href="logout.php">
        <button type="submit" name="submit" value="Logout">Logout</button></a></li></div>
        </ul>
      </nav><br>
        
 <h1>Science</h1><br>
        <nav class="nav-vesti"><ul class="menu">    
        <div><li class="item"> <a href="politics.php">Politics</a></li></div>
        <div><li class="item"> <a href="sport.php">Sport</a></li></div>
        <div><li class="item"> <a href="science.php">Science</a></li></div> 
       </ul> </nav><br>         
  <img src="img.app/nauka.jpeg"class="center"><br>
        
  <?php
function getResults($conn){
    $sql = "SELECT * FROM science";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)){
      echo "<div class='getResult-box'><b>";
        echo $row['uid'];
      echo "</b></div>"; 
      echo "<div class='getResult-box'><p>";
        echo nl2br($row['news']);
      echo "</p></div>";
    
  }  
}
?>
    <?php
          getResults($conn)
        ?> 
         <?php
           echo"<form method='POST' action='".setComments($conn)."'>
               <input type='hidden' name='uid' value='Anonymous'>
               <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
               <textarea name='message'textarea></textarea><br>
               <button type='submit' name='commentSubmit'>Comments</button>
              </form>"."<br><br>";
        ?>
    </body>    
</html>