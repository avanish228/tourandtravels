<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ob_start();
session_start();
?>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
                    $email ="";         <!-- give your email here -->                    
                    $password ="";      <!-- give your password here -->
                    $to_id =$_SESSION['email'];
                    $message =$_SESSION['message'];
                    $subject ="otp";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('thedarktourandtravels@gmail.com', 'thedarktourandtravels');

                    $mail->addReplyTo('thedarktourandtravels@gmail.com', 'thedarktourandtravels');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       
                           header("location:../enterotp.php");
                           
                           
                    }
               
        ?>
