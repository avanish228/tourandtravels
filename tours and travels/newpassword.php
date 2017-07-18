<!DOCTYPE html>
<?php
   session_start();
   ob_start();
   if(isset($_POST['submitp'])){
       if($_POST['pass']==$_POST['Npass']){
           require 'apis/db.php';
               $password=$_POST['pass'];
               $password=sha1($password);
               $salt=md5("userlogin");
               $peper="hbjn/,";
               $password=$password.$salt.$peper;
               $password = stripslashes($password);
               $password = mysqli_real_escape_string($con, $password);
               $sql="UPDATE login SET password='".$password."' WHERE email='".$_SESSION['nemail']."'";
   
               if ($con->query($sql) === TRUE)
            {
              header("location:apis/logout.php");
            }
       else {echo "error in updating the record";}
       }
       else {
          echo "<script>alert('please enter same password');</script>";
       }
   }
   ?>
<html lang="en-us">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>new password</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="form">
         <div class="header">
            <h2>password reset</h2>
         </div>
         <br>
         <div class="login">
            <form action="newpassword.php" method="post">
               <ul>
                  <li>
                     <span class="un"><i class="fa fa-key"></i></span><input type="password" required name="pass" class="text key" placeholder="Enter passwort" id="login-key" autocomplete="off">
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-key"></i></span><input type="password" required name="Npass" class="text key" placeholder="ReEnter your password" id="login-key" autocomplete="off">
                  </li>
                  <div class="down">
                     <li>
                        <button type="submit" name="submitp" class="btn btn_login">SUBMIT</button>
                     </li>
                     <br>
                  </div>
               </ul>
            </form>
         </div>
         <br>
      </div>
   </body>
</html>