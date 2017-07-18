<!DOCTYPE html>
<?php
   ob_start();
   session_start();
?>

<?php
if(isset($_REQUEST['next'])){
    $_SESSION['From']=$_REQUEST['From'];
    $_SESSION['To']=$_REQUEST['To'];
    $_SESSION['start_date']=$_REQUEST['start_date'];
    $_SESSION['end_date']=$_REQUEST['end_date'];
    $_SESSION['startTime']=$_REQUEST['startTime'];
    $_SESSION['vehical_type']=$_REQUEST['vehical_type'];
    header("Location:Personal.php");
}
?>

<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>the dark</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href = "css/bootstrap.min.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/template-scripts.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      
    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
        
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>The</strong>DARK</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Home</a></li>
                     
                     <li><a href="#about-us">About Us</a></li>
					 <?php if(isset($_SESSION['email'])){ echo "<li><a href='logout.php'>Logout</a></li>";}else{
						 echo "<li><a href='login.php'>Sign In</a></li><li><a href='registerform.php'>Sign Up</a></li>";
					 } ?>
					 <?php if(isset($_SESSION['email'])){ echo "<li><a href='index.php'>$_SESSION[email]</a></li>";}?>
                     
					 
					 
                     <li><a href="#contact">Contact</a></li>
					 <li><a href="canbook.php">Cancel Booking</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
        
               <div >
                  <img src="img/first.jpg" alt="">
                   
                        
                     </div>
                  
               
         <!-- FIRST BLOCK -->
               <div id="first-block">
                  
                  <div class = "row">
                      <form  method = "post" action="index.php"> 
            <div class= " col-lg-offset-1 col-md-offset-1 col-lg-2col-lg-2 col-md-2 col-sm-12 " align= "middle">
                 <label style= "color:white;" >From </label>
                    <div class = "form-group">
                        <select class = "form-control" name = "From" required>
                           <option selected disabled value="">source</option>
                            <option value="ArchGate" <?php if(isset($_SESSION['From'])){
                                if(($_SESSION['From']=='ArchGate')){ echo 'selected';}
                            }
                            ?>>Arch Gate</option>
                            <option value="Estancia" <?php if(isset($_SESSION['From'])){
                               if(($_SESSION['From']=='Estancia')){ echo 'selected';}
                            }
                            ?>>Estancia</option>
                            <option value="AbodeValley" <?php if(isset($_SESSION['From'])){
                               if(($_SESSION['From']=='AbodeValley')){ echo 'selected';}
                            }
                            ?>>Abode Valley</option>
                            <option value="PotheriRailway" <?php if(isset($_SESSION['From'])){
                               if(($_SESSION['From']=='PotheriRailway')){ echo 'selected';}
                            }
                            ?>>Potheri Railway Station</option>
                        </select>
                    </div>
                </div>
                <div class= "col-lg-2 col-md-2 col-sm-12">
                    <label style= "color:white;">To</label>

                    <div class = "form-group">
                        <select class = "form-control" name = "To" required>
                            <option selected disabled value="">destination</option>
                            <option value="Mahabalipuram" <?php if(isset($_SESSION['To'])){
                               if(($_SESSION['To']=='Mahabalipuram')){ echo 'selected';}
                            }
                            ?>>Mahabalipuram</option>
                            <option value="Puducherry" <?php if(isset($_SESSION['To'])){
                               if(($_SESSION['To']=='Puducherry')){ echo 'selected';}
                            }
                            ?>>Puducherry</option>
                            <option value="PhoinixMall" <?php if(isset($_SESSION['To'])){
                               if(($_SESSION['To']=='PhoinixMall')){ echo 'selected';}
                            }
                            ?>>Phoinix Mall</option>
                            <option value="ChennaiCentral" <?php if(isset($_SESSION['To'])){
                               if(($_SESSION['To']=='ChennaiCentral')){ echo 'selected';}
                            }
                            ?>>Chennai Central</option>
                        </select>
                    </div>
					</div>
					
				
                <div class="col-md-2 col-sm-12 text-center pagination-centered " >
                    <label style= "color:white;" >Start Date</label>

      <input type="date" name="start_date" class="datepicker form-control" placeholder="From" required value="<?php if(isset($_SESSION['start_date'])){
                               echo $_SESSION['start_date'];}
                            
                            ?>">
      </div>
    

    <div class="col-lg-2 col-md-2 col-sm-12 text-center pagination-centered">
        <label style= "color:white;" >End Date</label>
    <input type="date" name="end_date" class="datepicker form-control" placeholder=" To" required value="<?php if(isset($_SESSION['end_date'])){
                               echo $_SESSION['end_date'];}
                            
                            ?>">
</div>

   <div class="col-lg-2 col-md-2 col-sm-12  text-center pagination-centered">
      <label style = "color:white;">Time</label>
    <div class = "form-group">
        <input type = "time" name = "startTime" style="height: 34px; width:130px; border-radius: 4px;" required value="<?php if(isset($_SESSION['startTime'])){
                               echo $_SESSION['startTime'];}
                            
                            ?>">
    </div>
   </div><br><div class= " col-lg-offset-1 col-md-offset-1 col-lg-2col-lg-2 col-md-2 col-sm-12 " align= "middle">
                 <label style= "color:white;" >Vehical type </label>
                    <div class = "form-group">
                        <select class = "form-control" name = "vehical_type" required>
                           <option selected disabled value="">Select vehical</option>
                            <option value="3-seater" <?php if(isset($_SESSION['vehical_type'])){
                                if(($_SESSION['vehical_type']=='3-seater')){ echo 'selected';}
                            }
                            ?>>3-seater</option>
                            <option value="4-seater" <?php if(isset($_SESSION['vehical_type'])){
                               if(($_SESSION['vehical_type']=='4-seater')){ echo 'selected';}
                            }
                            ?>>4-seater</option>
                            <option value="7-seater" <?php if(isset($_SESSION['vehical_type'])){
                               if(($_SESSION['vehical_type']=='7-seater')){ echo 'selected';}
                            }
                            ?>>7-seater</option>
                            <option value="10-seater" <?php if(isset($_SESSION['vehical_type'])){
                               if(($_SESSION['vehical_type']=='10-seater')){ echo 'selected';}
                            }
                            ?>>10-seater</option>
                        </select>
                    </div>
                </div>
   
                  
<hr style="border:none;">
<hr style="border:none;"><br>

<input type= "submit" name="next" class = "btn btn-primary placeNext" style = "float:right;" value="Next"/>
        </form>
            </div>
               </div>

			   
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>The Dark Design</h3>
                     <address>
                        <p><strong>Adress:</strong> Potheri chennai- 603203</p>
                        <p><strong>Country:</strong> India</p>
                        <p><strong>E-mail:</strong> thedarktourandtravels@gmail.com</p>
                     </address>
                     <br />
                     <h3>Social</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">The Dark Design - graphic</a></p>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/thedark0"></a>The dark</p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">The Dark</a></p>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>Example contact form (do not use)</h3>
                    <form class="customform" action="">
                      <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                      <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                      <div class="s-12"><textarea placeholder="Your message" name="" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit Button</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
         <!-- MAP -->
         <div id="map-block">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d12.824831019090596!3d80.04496253825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>
         </div>
         
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2016, The Dark Design </p>
               <p>All images is purchased from The Dark. Do not use the images in your website.</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Avanish and Suraj</a>
            </div>
         </div>
      </footer>
      
     
    </script>
   </body>
</html>