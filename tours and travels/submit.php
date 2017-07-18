<?php
if(isset($_REQUEST['login'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$user=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
$mobile=$_REQUEST['mobile'];
$addr=$_REQUEST['saddress'];
require_once 'db.php';
$sql="INSERT INTO registration(name,email,username,pwd,mobile,addr) VALUES ('$name','$email','$user','$pwd',$mobile,'$addr')";
       $result= $con ->query($sql);
       $affected = $con ->affected_rows;
    if($affected == 1)
 {  
        echo '<script>alert("successfully added");</script>';
 }
        else {
                  echo "error in inserting the record";
                  
        }

    
}


?>
 <head>
        <title>Booking Confirm</title>
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
    </head>
    <body>
        <div class = "container">
            <nav class="navbar navbar-default navbar-fixed-top" style= "background-color:#00283a;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><p style="color:white;">The Dark Travels</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><p style="color:white;">Services</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio"><p style="color:white;">Portfolio</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><p style="color:white;">About</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team"><p style="color:white;">Team</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><p style="color:white;">Contact</p></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        </div><br><br><br><br>
<div class ="container">
            <div class="row">
            <div class = "col-sm-12 col-xs-12">
                <h1> Confirm Your Details</h1>
                <hr>
                <h4>Name           :<?php if(isset($_REQUEST['login'])){ echo "$name"; }?> </h4>
                <h4>Email Id       :<?php if(isset($_REQUEST['login'])){ echo "$email"; }?></h4>
                <h4>User Id       :<?php if(isset($_REQUEST['login'])){ echo "$user"; }?></h4>
                <h4>Contect Number :<?php if(isset($_REQUEST['login'])){ echo "$mobile"; }?></h4>
                <hr>
                <h4>Address :<?php if(isset($_REQUEST['login'])){ echo "$addr"; }?></h4>
               
                
            </div>
        </div>
        </div>





<!--<body style="background-color:#80bfff;">
<?php include 'header.php'; ?>
<div>

         <br>
         <br>
		 <h1 align="center">USER DETAIL</h1>
         <br><br>
         <br>
         <br>
    <table style="border-style:solid double;colour:red;height:300px;width:350px" align="center">
     <tr><td>Name : </td><td><?php if(isset($_REQUEST['login'])){ echo "$name"; }?></td></tr>  
     <tr><td>Email Id : </td><td><?php if(isset($_REQUEST['login'])){ echo "$email"; }?></td></tr> 
     <tr><td>User Is : </td><td><?php if(isset($_REQUEST['login'])){ echo "$user"; }?></td></tr> 
     <tr><td>Mobile No : </td><td><?php if(isset($_REQUEST['login'])){ echo "$mobile"; }?></td></tr> 
     <tr><td>Address : </td><td><?php if(isset($_REQUEST['login'])){ echo "$addr"; }?></td></tr>  	 
    </table>
          
    
</body>-->
