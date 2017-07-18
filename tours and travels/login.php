

<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['email']))
{
   header("location:dashboard.php");
}
?>
<html lang="en-us">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>The Dark Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h3 class="animated bounceInDown">The Dark</h3>
      <div class="form">
         <div class="header">
            <h2>User Login</h2>
         </div>
         <br>
         <div class="login"><form method="post" action="checklogin.php">
            <ul>
               <li>
                  <span class="un"><i class="fa fa-user"></i></span><input type="email" name="user" required class="text email" placeholder="Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
               </li>
               <li>
                  <span class="un"><i class="fa fa-lock"></i></span><input type="password" name="pass" required class="text password" placeholder="User Password"  autocomplete="off">
               </li>
               
               <div class="down">
                  <li>
                     <input type="submit" name="login" value="Login" class="btn btn_login"/>
                  </li>
                  <li>
                     <div class="span forgot_pass"> <span class="ch"><a href="forgotPassword.php">Forgot Password?</a></span></div>
                  </li>
               </div>
            </ul></form>
            <div class="preload" style="display:none;">
               <center>
                  <div class="loader"><img src="preloader/preloader.gif" height="60" width="60"></div>
               </center>
            </div>
         </div>
         <br>
      </div>
     
   </body>
</html>