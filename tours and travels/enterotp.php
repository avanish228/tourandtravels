<!DOCTYPE html>
<?php
   session_start();
   ob_start();
   if(isset($_POST['otp'])){
       if($_POST['otp']==$_SESSION['otp']){
		   echo "<script>alert('Your booking has been successfully canceled')</script>";
		   $s=$_SESSION['bid'];
		   $_SESSION['message']="your cab booking under Booking Id $s has been successfully cancled";
		   header("location:send-email-via-gmail-smtp-server-in-php/gmail.php");
       }
    else {
            echo "<script>alert('please enter correct OTP')</script>";
       }
   }
   ?>
<html lang="en-us">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Cancel Booking</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="form">
         <div class="header">
            <h2>OTP</h2>
         </div>
         <br>
         <div class="login">
            <form action="enterotp.php" method="post">
               <ul>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" name="otp" required class="text email" placeholder="Enter otp" id="login-user" autocomplete="off">
                  </li>
                  <div class="down">
                     <li>
                        <button type="submit" class="btn btn_login">submit</button>
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