<?php
ob_start();
   session_start();
?>
<?php
if(isset($_REQUEST['next1'])){
    $_SESSION['name']=$_REQUEST['name'];
    $_SESSION['RegNo']=$_REQUEST['RegNo'];
    $_SESSION['email']=$_REQUEST['email'];
    $_SESSION['number']=$_REQUEST['number'];
header("Location:confirm.php");}
if(isset($_REQUEST['back'])){
    header("Location:index.php");
    
}

?>
<script> function validateForm() {
    var x = document.forms["myform"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
		
    }
	var x = document.forms["myform"]["RegNo"].value;
    if (x == "") {
        alert("Registration be filled out");
        return false;
    }
	var x = document.forms["myform"]["number"].value;
    if (x == "") {
        alert("Mobile number be filled out");
        return false;
    }
	var x = document.forms["myform"]["email"].value;
    if (x == "") {
        alert("Email be filled out");
        return false;
    }
}</script>



<html>
	<head>
	<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
		body{
			background-color:#00283a;
		}

	</style>
	</head>
	<body>
		<div class="container" style="margin-top:10%;">
		<div class = "row">
			<div class = "col-lg-offset-4 col-lg-4 col-sm-12" style= "background-color:white;">
  <h2 align="middle">Personal Details</h2>
		</div>
		</div>
  <form name="myform" onsubmit="return validateForm()" role=form>
  <div class = "row">
	<div class ="col-lg-offset-4 col-lg-4 col-sm-offset-1 col-sm-10 col-xs-12" style= "background-color:white;">
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Name" align="middle" value="<?php if(isset($_SESSION['name'])){
                               echo $_SESSION['name'];}
                            ?>">
    </div>
	</div>
	</div>
<div class = "row">
		<div class ="col-lg-offset-4 col-lg-4 col-sm-offset-1 col-sm-10 col-xs-12" style= "background-color:white;">

    <div class="form-group">
      <input type="text" class="form-control" name="RegNo" placeholder="Registration Number" align="middle"  value="<?php if(isset($_SESSION['RegNo'])){
                               echo $_SESSION['RegNo'];}
                            
                            ?>">
    </div>
		</div>
</div>
<div class = "row">
	<div class ="col-lg-offset-4 col-lg-4 col-sm-offset-1 col-sm-10 col-xs-12" style= "background-color:white;">
    <div class="form-group">
      <input type="text" class="form-control" name="number" placeholder="Contact" align="middle"  value="<?php if(isset($_SESSION['number'])){
                               echo $_SESSION['number'];}
                            
                            ?>">
    </div>
	</div>
</div>
<div class="row">
		<div class ="col-lg-offset-4 col-lg-4 col-sm-offset-1 col-sm-10 col-xs-12 " style= "background-color:white;">

    <div class="form-group">
      <input type="text" class="form-control" name="email" placeholder="Email-id" align="middle"  value="<?php if(isset($_SESSION['email'])){
                               echo $_SESSION['email'];} ?>">
    </div>
		</div>
</div>
<div class="row" >
		<div class ="col-lg-offset-4 col-lg-2 col-sm-12 " style= "background-color:white;">
                    <button class = "btn btn-primary" name="back" style="float:left;">Back</button>
		</div>
		<div class ="col-lg-2 col-sm-12"  style= "background-color:white;">
	<input type= "submit" class = "btn btn-primary" name="next1" style="float:right;" />
		</div>
</div>
<div class = "row">
	<div class = "col-lg-offset-4 col-lg-4 col-sm-12" style= "background-color:white;">
		<br><br><br>
	</div>
</div>
  </form>
		
		</div>
	</body>
</html>