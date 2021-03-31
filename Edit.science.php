
<?php
   date_default_timezone_set('Europe/Oslo');
   include_once "science.inc.php";
?>
    
<?php
$conn = new mysqli("localhost","root","=========","my_app");

 if(!$conn){
     die("Connection faild: ".mysqli_connect_error());
 }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Science</title>
    </head>
    <body>
        
     <?php
         $cid = $_POST['cid'];
         $uid = $_POST['uid'];
         $date = $_POST['date'];
         $news = $_POST['news'];

         echo"<form method='POST'  action='".editNews($conn)."'>
           <input type='hidden' name='cid' value='".$_POST['cid']."'>
           <input type='hidden' name='uid' value='".$_POST['uid']."'>
           <input type='hidden' name='date' value='".$_POST['date']."'>
           <textarea name='news'>".$_POST['news']."</textarea><br>
           <button type='submit' name='commentNews'>Edit</button>        
           </form>"."<br><br>";
        
        ?>              
 </body>   
</html>