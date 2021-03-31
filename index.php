<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Login</title>
     </head>
    <body>
         <fieldset class="login-box"login-l>
         
           <h1>Login form</h1><br>
             
                <form action="#" method="post">
              <div style="4px;">
                <div style="float:left; width:80px;background-color: white;"> Username </div>
                <div style="float:left;"><input type="text" name="username"/></div>
                <div style="clear:both;"></div>
              </div>
              <div style="4px;">
                 <div style="float:left; width:80px;background-color: white;"> Password </div>
                 <div style="float:left;"><input type="password" name="password"/></div>
                 <div style="clear:both;"></div>
               </div><br>
               <div>
                  <button type="submit" name="submit" value="Login"> Login</button>
                  <button type="reset" name="reset" value="reset"> Reset</button>
               </div>
            </form>
              <?php
                   session_start();
                   include_once "loginBL.class.php";
                   $loginBL = new LoginBL();
                   if (isset($_POST["submit"]))
                   {
                      $loginBL->LoginUser();
                   }  
       
                ?>
             </fieldset>
                    
         <fieldset class="login-box"login-l>
         <h1>Register form</h1><br>
             <form action="register.user.php" method="POST">
             
           <label>Username:<br>
           <input type="text" name="username" placeholder="username"></label><br>
           <label>Password:<br>
           <input type="password" name="password" placeholder="password"></label><br>
           <label>Email:<br>
           <input type="text" name="email" placeholder="email"></label><br><br>
        
                 
             <div>
             <button type="submit" name="Register" value="Register"> Register</button>
             </div>
        </form>
        </fieldset>
        
 </body>     
</html>







