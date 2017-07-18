<?php
ob_start();
session_start();
?>
<?php
        include_once 'db.php';
        @mysql_connect(host,user,pwd);
        mysql_select_db(database);
?>
<?php
//
$_SESSION['email']="avanish_gobardhans@srmuniv.edu.in";
$t=$_REQUEST['name'];
$id=$_SESSION['booking_id'];
$reg_no=$_SESSION['RegNo']; 
$con=$_SESSION['number']; 
$from=$_SESSION['From']; 
$to=$_SESSION['To']; 
$s_date=$_SESSION['start_date']; 
$e_date=$_SESSION['end_date'];
$s_time=$_SESSION['startTime'];
$type=$_SESSION['vehical_type'];
$_SESSION['message']="$type has been booked by $t \nbooking id = $id \ncontact no $con \nfrom $from \nto $to \nstart date is $s_date and \nend date is $e_date \ntime is $s_time";
$_SESSION['out']="hello";
header("location:gmail.php?submit='kjdfknFASFASF546464S6AF4S6F46SF46FS4S6F46F46F4S6A4FS6AF46SF4S6F4mLK'");
//echo '<form action="send-email-via-gmail-smtp-server-in-php/gmail.php" method="post">';
//                   echo ' <input type="submit" value="confirm your booking" name="send"/>';
//                echo '</form>';
?>