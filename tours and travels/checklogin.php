<?php
if(isset($_REQUEST['login'])){
	session_start();
    require_once 'db.php';
    $email=$_REQUEST['user'];
    $password=$_REQUEST['pass'];
	$sql = "SELECT * FROM `registration` WHERE `email`='" . $email . "' and `pwd`='" . $password."'";
    echo $sql;
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1)
	{
		//echo "hhhhh";
	$row = mysqli_fetch_assoc($result);
	$_SESSION['email'] = $row['username'];

	header("location:index.php"); 
	}
  else
	{
	
        echo "<script>alert('wrong username and password');window.location.href='login.php'</script>";
        
		
        
	}
}
?>
