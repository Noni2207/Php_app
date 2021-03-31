
<?php
   date_default_timezone_set('Europe/Oslo');
   include_once "comment.inc.php";
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
    <meta charset="UTF-8">
    <title>Edit comments</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Comments</title>
    </head>
    <body>
        
     <?php
         $cid = $_POST['cid'];
         $uid = $_POST['uid'];
         $date = $_POST['date'];
         $message = $_POST['message'];
        
        
         echo"<form method='POST'  action='".editComments($conn)."'>
           <input type='hidden' name='cid' value='".$_POST['cid']."'>
           <input type='hidden' name='uid' value='".$_POST['uid']."'>
           <input type='hidden' name='date' value='".$_POST['date']."'>
           <textarea name='message'>".$_POST['message']."</textarea><br>
           <button type='submit' name='commentSubmit'>Edit</button>        
           </form>"."<br><br>";
        
        ?>     
 </body>   
</html>
