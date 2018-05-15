# tourandtravels
fully configured tour and travel cab booking site with sms and mail service included

in this site you will get registration page login page and all which will send text message and mail after booking and cancellation .

one ned to have his or her account on ways to sms and gmail...

please modify the file according to your ways to sms data in following file
tourandtravels/way2sms/sendsms.php

and modify the file according to your gmail data in following files
tourandtravels/send-email-via-gmail-smtp-server-in-php/gmail.php
and
tourandtravels/send-email-via-gmail-smtp-server-in-php1/gmail.php

create a database named as  dark

and import the .sql file in the above directory

one can get commands also in .sql file



submit.php

<?php
session_start();
require_once 'db.php';

$name = $_REQUEST['name'];
$email=$_REQUEST['email'];
$phone = $_REQUEST['phone'];
$pass = $_REQUEST['pass'];
$sql="INSERT INTO `login`(`name`, `uname`, `pass`, `email`, `phone`, `storage`) VALUES ('$name','$name','$pass','$email','$phone','0')";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($result)
	{
	header("location:index.php");
	}
  else
	{
	echo $sql;
	?>
           <script>alert("wrong username and password")</script>
       <?php
	
	}
	

?>


checklogin.php

<?php

session_start();
require_once 'db.php';

$email = $_POST['email'];
$key = $_POST['key'];
$password = $_POST['password'];
$password = sha1($password);
$salt = md5("userlogin");
$peper = "hbjn/,";
$password = $password . $salt . $peper;
$password = stripslashes($password);
$sql = "SELECT * FROM `login` WHERE `email`='" . $email . "' and `password`='" . $password . "' and `security_key`='" . $key . "'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1)
	
	{
	
	$row = mysqli_fetch_assoc($result);
	$_SESSION['email'] = $row['username'];
	$_SESSION['mail']=$row['email'];
	echo "true";
	
	}
  else
	{
	echo "false";
	}

?>


db.php
<?php
/*define('DB_SERVER', 'mysql.hostinger.in');
define('DB_USERNAME', 'u362615874_sco');
define('DB_PASSWORD', 'scolaire');
define('DB_DATABASE', 'u362615874_sco');*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'scolaire');

$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die( "Cannot Connect To Database");
if(!$con)
{
   echo "Cannot Connect To Database";
   die();
}
?>


upload.php

<?php
ob_start();
session_start();
if(isset($_REQUEST['submit']))
{
	$file1="";
	$file2="";
 if(isset($_FILES['file1'])){
      $errors= array();
      $file_name = $_FILES['file1']['name'];
      $file_size =$_FILES['file1']['size'];
      $file_tmp =$_FILES['file1']['tmp_name'];
      $file_type=$_FILES['file1']['type'];
      $val=explode('.',$_FILES['file1']['name']);
      $file_ext=strtolower(end($val));
      
      if(empty($errors)==true){
	 if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
		 $file1="uploads/".$file_name;
           }
           else{
		echo "uploads/".$file_name; 
               echo "Failure";
	      }
 	
      }else{
         print_r($errors);
      }
   }
	 if(isset($_FILES['file2'])){
      $errors= array();
      $file_name = $_FILES['file2']['name'];
      $file_size =$_FILES['file2']['size'];
      $file_tmp =$_FILES['file2']['tmp_name'];
      $file_type=$_FILES['file2']['type'];
	  $val=explode('.',$_FILES['file2']['name']);
      $file_ext=strtolower(end($val));
      
      if(empty($errors)==true){
	 if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
		 $file2="uploads/".$file_name;
           }
           else{
		echo "uploads/".$file_name; 
               echo "Failure";
	      }
 	
      }else{
         print_r($errors);
      }
   }
$blog_name=$_REQUEST["name"];
$message=$_REQUEST["message"];
$address=$_REQUEST["address"];
$p1=$_REQUEST["p1"];
$p2=$_REQUEST["p2"];
$p3=$_REQUEST["p3"];
$a_name=$_REQUEST["a_name"];
$zomato=$_REQUEST["zomato"];
$lat=$_REQUEST["lat"];
$long=$_REQUEST["long"];
require_once 'db.php';
$sql="INSERT INTO `blog`(`blog_name`, `main_image`, `calorie_image`, `address`, `first_para`, `second_para`, `third_para`, `author_name`, `zomato_url`, `latitude`, `longitude`) VALUES ('$blog_name','$file1','$file2','$address','$p1','$p2','$p3','$a_name','$zomato','$lat','$long')";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($result)
	{
		
    echo "<script>alert('Blog uploades Successfully')</script>";
	
	}
  else
	{
	echo $sql;
	?>
           <script>alert("Unable to post blog please contact admin")</script>
       <?php
	
	}
 $sql = "SELECT * FROM subscribers";  
 $result = mysqli_query($con, $sql); 
   $message ="<div>
    <div>
      <div>
        <div>
          <div>
            <h2 style='color: #FFA532; font-family: sans-serif; font-size: 15px'>Dear Reader, Welcome to Readers Appetite!</h2>
        </div>
      </div>
    </div>
  </div>
<div>
  <div>
    <div>
      <br>
      <br>
      <br>
      <center><h1 style='color: #056A63; font-family: scriptina; font-size: 35px'><b>What We Are</b></h1>
      <p style='color: #676F6F; font-family: sans-serif; font-size: 18px'>We are building a community of food bloggers who love to explore eateries. We showcase their snaps and thought about their food. More than 50 percent of the culinary world is still under darkness and cannot reach to right people. We appreciate and showcase these hidden flavors and pre-locate the right places where you can find these places. 

We welcome you to cherish them and read the latest blog uploaded on our site. Kindly visit the website to read the complete story behind this appetite. Know the exact details like calories, location and more about that appetite all at one place.
</p></center>
    </div>
    <div>
      <div >
        <center><h1 style='color: #056A63; font-family: scriptina; font-size: 35px'><b>All in All</b></h1>
        <p style='color: #676F6F; font-family: sans-serif; font-size: 18px'>We are here to publish and pin our talents to the crowd. Let us build this Culinary Community We will create web pages for the blogs that are written to us. Some of them are uploaded for reference. Simply mail us your details for collaboration, and we will connect with you for your blogs to be showcased here.</p>
        </center>
      </div>
      
    </div>
  </div>
</div>
<div>
  <div>
    <div>
     <br>
     <br>
     <br>
     <br>
      <h2 style='color: #056A63'>Latest Upload</h2>
    </div>
    <div>
      <div> <center><img src='img/about.jpg' class='img-responsive' alt=''></center> </div>
      <div>
        <div>
          <center><h2>$blog_name</h2>
          <p style='color: #676F6F'>$p1</p></center>
          </div>
      </div>
    </div>
  </div>
</div>";
      while($row = mysqli_fetch_array($result))  
      {  
                    require 'phpmailer/PHPMailerAutoload.php';
                    $email ="readersappetite@gmail.com";                    
                    $password ="saketnagar";
                    $to_id =$row["email"];
                    
                    $subject ="New Blog";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('readersappetite@gmail.com', 'readersappetite');

                    $mail->addReplyTo('readersappetite@gmail.com', 'readersappetite');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    }else{
						header("location:index.php");
					}
      }
 
}

?>
