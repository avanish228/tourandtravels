<!DOCTYPE html>
<?php
   session_start();
   ob_start();
   require_once  'db.php';
   $bid=$_POST['bid'];
   $_SESSION['bid']=$bid;
   $sql="SELECT * FROM tour_detail WHERE booking_id='$bid'";
   $result = mysqli_query($con, $sql);
   $count = mysqli_num_rows($result);

if ($count == 1)
	{
		//echo "hhhhh";
	$row = mysqli_fetch_assoc($result);
	$_SESSION['email']=$row['email'];
	$_SESSION['number']=$row['number'];
	}
   $result= $con ->query($sql);
          $affected = $con ->affected_rows;
       if($affected == 1){
   $r=mt_rand(1000,9999);
   $_SESSION['otp']="$r";
   $_SESSION['message']="your otp is $r";
   //header("location:index.php");
   header("location:send-email-via-gmail-smtp-server-in-php1/gmail.php");
   }
    else {
       $_SESSION['wmessage']="please enter correct booking Id";
       header("location:canbook.php");
   }
   ?>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
   </body>
</html>