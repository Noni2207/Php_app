<html>
<head>
 <title>Registering</title>
   <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
  <div >
     <fieldset class="login-box"login-l>
         <a href="index.php"></a>
         <section>
            <h1>Register form</h1><br>
             
           <form action="#" method="POST">
           <label>Username:<br>
           <input type="text" name="username" placeholder="username"></label><br>
           <label>Password:<br>
           <input type="password" name="password" placeholder="password"></label><br>
           <label>Email:<br>
           <input type="text" name="email" placeholder="email"></label><br><br>
           <input type="submit" name="Register" value="Register">
           </form>
         </section>
        </fieldset>
    <div>
        
 <?php
      if(isset($_POST['Register'])){
        if(isset($_POST['username']) && isset ($_POST['password']) && isset ($_POST['email'])){
          if(empty($username) || empty ($password) || empty ($email)){
              header("Location:index.php?error=emptyfileds&username=".$username."&mail=".$email);
              exit();
              $username = $_POST['username'];
              $password = $_POST['password'];
              $email = $_POST['email'];
         
              $conn = new mysqli("localhost","root","=========","my_app");
               if(!$conn){
               die("Connection faild: ".mysqli_connect_error());
               }
           }else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
              header("Location:index.php?error=invalidmailusername");
              exit();
             
           }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              header("Location:index.php?error=invalidmail&username=".$username);
              exit();
             
           }else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
              header("Location:index.php?error=invalidusernamel&mail=".$email);
              exit();
           }else
             $sql = "SELECT username FROM korisnici WHERE username ='$username'";
             $result = $conn->query($sql);
             $stmt = mysqli_stmt_init($conn);
             if(!mysqli_prepare($stmt,$result)){
                header("Location:index.php?error=sqlerror");
                exit();  
           }else{
              mysqli_stmt_bind_param($stmt, "s", $username );
              mysqli_stmt_execute($stmt);
              mysqli_store_result($stmt);
              $resultCheck = mysqli_num_rows($stmt);
              if($resultCheck > 0){
                header("Location:index.php?error=usertaken&mail=".$email);
                exit(); 
              }else{
              
                  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email ')";
                  $result = $conn->query($sql);
                  $stmt = mysqli_stmt_init($conn);
                  if(!mysqli_prepare($stmt,$result)){
                   header("Location:index.php?error=sqlerror");
                    exit();
              }else{
                  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                  mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd );
                  mysqli_stmt_execute($stmt);
                  header("Location:index.php?register=success");
                  exit();
               }
                  
             }
         }
       }
          
         mysqli_stmt_close( $stmt);
         mysqli_close($conn); 
     }                                      
?>
    </div> 
  </div> 
</body>
</html> 
  









      