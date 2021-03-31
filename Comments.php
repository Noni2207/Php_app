

<?php
   date_default_timezone_set('Europe/Oslo');
   include_once "comments.inc.php";
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
        <title>Comments</title>
    </head>
    <body>                    
      <nav>
        <ul class="menu">
          <div> <li class="item"> <a href="Home.php">Home</a></li></div>
          <div><li class="item"> <a href="news.php">News</a></li></div>
          <div><li class="item"> <a href="Comments.php">Comments</a></li></div>
          <div><li class="item"> <a href="logout.php">
          <button type="submit" name="submit" value="Logout">Logout</button></a></li></div>
        </ul>
      </nav><br>
 
         <h1>Comments</h1><br>
         <?php
           echo"<form method='POST' action='".setComments($conn)."'>
               <input type='hidden' name='uid' value='Anonymous'>
               <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
               <textarea name='message'textarea></textarea><br>
               <button type='submit' name='commentSubmit'>Comment</button>
              </form>"."<br><br>";
        getComments($conn);
        ?>              
 </body>  
</html>

