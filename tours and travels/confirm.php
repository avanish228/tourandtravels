<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 <?php
        require_once 'db.php';
        session_start();
        ob_start();
        //echo $type=$_SESSION['vehical_type'];
       
        $r=mt_rand(100000,999999);
        $a="agreed";
        $qry="INSERT INTO `tour_detail`(`name`, `RegNo`, `email`, `number`, `booking_id`, `vehical_type`, `From`, `To`, `start_date`, `end_date`, `startTime`, `terms_and_conditions`) VALUES ('$_SESSION[name]','$_SESSION[RegNo]','$_SESSION[email]','$_SESSION[number]','$r','$_SESSION[vehical_type]','$_SESSION[From]','$_SESSION[To]','$_SESSION[start_date]','$_SESSION[end_date]','$_SESSION[startTime]','$a')";
        //echo $qry;
		//echo "<script>alert($qry)</script>";
		$_SESSION['booking_id']=$r;
        $c=$_SESSION['vehical_type'];
        $d=$_SESSION['From'];
        $e=$_SESSION['To'];
        $_SESSION['message']="your $c from $d to $e has been booked succefully under booking id=$r";
		$result= $con ->query($qry);
        $affected = $con ->affected_rows;
        if($affected == 1)
            {
                   
                 // echo "<script>alert('success')</script>";
        }
		else{
			//echo "<script>alert('error in inserting the record')</script>";
		}
                
        $q="select * from tour_detail where name='$_SESSION[name]'";
		$res=$con ->query($q);
        $row=mysqli_fetch_array($res);         
        ?>

<!doctype html>
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
                <h4>Name           :<?php if(isset($_SESSION['name'])){
                               echo "   ".$_SESSION['name'];}
                            ?></h4>
                <h4>Reg. No.       :<?php if(isset($_SESSION['RegNo'])){
                               echo "   ".$_SESSION['RegNo'];}
                            
                            ?></h4>
                <h4>Email-Id       :<?php if(isset($_SESSION['email'])){
                               echo "   ".$_SESSION['email'];} ?></h4>
                <h4>Contect Number :<?php if(isset($_SESSION['number'])){
                               echo "   ".$_SESSION['number'];}
                            
                            ?></h4>
                <hr>
                <h4>Vechile Type : <?php if(isset($_SESSION['vehical_type'])){
                               echo "   ".$_SESSION['vehical_type'];}
                            ?></h4>
                <h4>From         :<?php if(isset($_SESSION['From'])){ echo "   ".$_SESSION['From'];}?></h4>
                <h4>To           :<?php if(isset($_SESSION['To'])){ echo "   ".$_SESSION['To'];}?></h4>
                <h4>Start Date   :<?php if(isset($_SESSION['start_date'])){
                               echo "   ".$_SESSION['start_date'];}
                            
                            ?></h4>
                <h4>End Date     :<?php if(isset($_SESSION['end_date'])){
                               echo "   ".$_SESSION['end_date'];}
                            
                            ?></h4>
                <h4>Time         : <?php if(isset($_SESSION['startTime'])){
                               echo "   ". $_SESSION['startTime'];}
                            
                            ?></h4>
                <hr>
                <h1>Terms And Conditions</h1>
                <hr>
                <p>1. coustomer must carry a valid identity proof (provided by indian gov.)</p><br>
                <p>2. we are not responsible for any ....................  </p><br>
                <p>3. </p><br>
                <hr>
                
            </div>
        </div>
        </div>
        <div class = "container">
            <div class = "row">
               
            <div class = "col-lg-offset-3 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 ">      
                <form action="send-email-via-gmail-smtp-server-in-php/gmail.php" method="post"> <input type="checkbox" id="HTML" value="HTML" style="margin:5px;" required><label for="HTML" style="display: inline;">I accept the Terms and Conditions</label><br> 
				 <br>
            <div class = "row">
                <div class = "col-sm-12 col-xs-12">

                    <button class = "btn btn-primary" >Agree & Confirm</button><br><br>
                </div>
            </div>
                </form>
        </div>
    </body>		
