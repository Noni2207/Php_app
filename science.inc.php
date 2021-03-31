<?php

function setNews($conn){
    if(isset($_POST['commentNews'])){
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $news = $_POST['news'];
        
      $sql = "INSERT INTO science (uid, date, news) 
      VALUES ('{$uid}', '{$date}', '{$news}')";
      $result = $conn->query($sql);
    }
   
}

function getNews($conn){
    $sql = "SELECT * FROM science";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
     echo "<fieldset><div class='comment-box'>"; 
        echo $row['uid']."<br>";
        echo $row['date']."<br>";
        echo $row['news']."<br><br>";
     echo "</div>
     <form method='POST' class='delete-form' action='".deleteNews($conn)."'>
      <input type='hidden' name='cid' value='".$row['cid']."'>
      <button type='submit' name='NewsDelete'>Delete</button>
     </form>
     
     <form method='POST' class='edit-form' action='Edit.science.php'>
      <input type='hidden' name='cid' value='".$row['cid']."'>
      <input type='hidden' name='uid' value='".$row['uid']."'>
      <input type='hidden' name='date' value='".$row['date']."'>
      <input type='hidden' name='news' value='".$row['news']."'>
      <button>Edit</button>
     </form>
   </fieldset>";
    }
    
    
}
function editNews($conn){
    if(isset($_POST['commentNews'])){
      $cid = $_POST['cid'];
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['news'];
        
      $sql = "UPDATE science SET news= '{$news}' WHERE cid= '{$cid}'";
      $result = $conn->query($sql);
      header("Location:science.php");
    }
   
}
function deleteNews($conn){
    if(isset($_POST['NewsDelete'])){
      $cid = $_POST['cid'];
     
        
      $sql = "DELETE FROM science WHERE cid= '{$cid}'";
      $result = $conn->query($sql);
      header("Location:science.php");
    }
}