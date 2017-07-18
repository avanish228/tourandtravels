<!DOCTYPE html>
<?php
   session_start();
   ob_start();
   unset($_SESSION['otp']);
   if(isset($_SESSION['wmessage'])){
       echo "<script>alert('please enter correct Booking ID')</script>";
   }
   ?>
<html lang="en-us">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>booking</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="form" style="margin-top:10%">
         <div class="header">
            <h2>Cancel Booking</h2>
         </div>
         <br>
         <div class="login">
            <form action="sendotp.php" method="post">
               <ul>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" name="bid" required class="text email" placeholder="Booking Id" id="login-user" autocomplete="off">
                  </li>
                  <div class="down">
                     <li>
                        <button type="submit" class="btn btn_login">Cancel</button>
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