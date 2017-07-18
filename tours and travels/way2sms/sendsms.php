<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,). 
 * @param msg = Your Message ( Upto 140 Chars)
 */
ob_start();
session_start();
include('way2sms-api.php');
$uid="";   <!-- give your userID here -->
$pwd="";      <!-- give your password here -->
if (isset($_SESSION['number']) && isset($_SESSION['message']))
{
	
    $res = sendWay2SMS($uid,$pwd, $_SESSION['number'], $_SESSION['message']);
    if (is_array($res)){
	
     $t=$_SESSION['name'];
     			   
     header("location:../send-email-via-gmail-smtp-server-in-php/confirm_booking.php?name=$t");	
	     //echo $res[0]['result'] ? 'true' : 'false';
            }
    else{
        echo $res;
	     }   
	exit;
}
