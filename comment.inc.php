<?php

function setComments($conn){
    if(isset($_POST['commentSubmit'])){
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];
        
      $sql = "INSERT INTO comment (uid, date, message) 
      VALUES ('{$uid}', '{$date}', '{$message}')";
      $result = $conn->query($sql);
    }
   
}

function getComments($conn){
    $sql = "SELECT * FROM comment";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
     echo "<fieldset><div class='comment-box'>"; 
        echo $row['uid']."<br>";
        echo $row['date']."<br>";
        echo $row['message']."<br><br>";
     echo "</div>
     <form method='POST' class='delete-form' action='".deleteComments($conn)."'>
      <input type='hidden' name='cid' value='".$row['cid']."'>
      <button type='submit' name='commentDelete'>Delete</button>
     </form>
     
     <form method='POST' class='edit-form' action='Edit.koment.php'>
      <input type='hidden' name='cid' value='".$row['cid']."'>
      <input type='hidden' name='uid' value='".$row['uid']."'>
      <input type='hidden' name='date' value='".$row['date']."'>
      <input type='hidden' name='message' value='".$row['message']."'>
      <button>Edit</button>
     </form>
   </fieldset>";
    }
    
    
}
function editComments($conn){
    if(isset($_POST['commentSubmit'])){
      $cid = $_POST['cid'];
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];
        
      $sql = "UPDATE comment SET message= '{$message}' WHERE cid= '{$cid}'";
      $result = $conn->query($sql);
      header("Location:Comments.php");
    }
   
}
function deleteComments($conn){
    if(isset($_POST['commentDelete'])){
      $cid = $_POST['cid'];
     
        
      $sql = "DELETE FROM comment WHERE cid= '{$cid}'";
      $result = $conn->query($sql);
      header("Location:Comments.php");
    }
}
