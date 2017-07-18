<!DOCTYPE html>
 <!--<div id="results">  
   </div>
         -->
<!--<div id="results">
    All data will display here  
   </div>
   -->
<?php
   ob_start();
   session_start();
?>
<?php
/*if(isset($_REQUEST['next'])){
    $_SESSION['From']=$_REQUEST['From'];
    $_SESSION['To']=$_REQUEST['To'];
    $_SESSION['start_date']=$_REQUEST['start_date'];
     $_SESSION['end_date']=$_REQUEST['end_date'];
      $_SESSION['startTime']=$_REQUEST['startTime'];
}
if(isset($_REQUEST['submit'])){
    $_SESSION['fname']=$_REQUEST['fname'];
    $_SESSION['registernumber']=$_REQUEST['registernumber'];
    $_SESSION['email']=$_REQUEST['email'];
    $_SESSION['contact']=$_REQUEST['contact'];
    $_SESSION['emergencycontact']=$_REQUEST['emergencycontact'];
}*/
      if(isset($_REQUEST['termsncondition'])){
          $a=personal();
          $b=tour_detail();
          if($a==1){
              if($b==1){
                  header("Location:confirm.php");
                  
              }else {
                  echo '<script>alert("please fill your tour detail form properly");</script>';
              }
          }
          else { echo '<script>alert("please fill your personal detail form properly");</script>';
          }
      }
function personal(){
    if(isset($_SESSION['name']) && isset($_SESSION['RegNo']) && isset($_SESSION['email']) && isset($_SESSION['number'])){
        return 1;
    }
    else {return 4;}
}
function tour_detail(){
    if(isset($_SESSION['From']) && isset($_SESSION['To']) && isset($_SESSION['start_date']) && isset($_SESSION['end_date']) && isset($_SESSION['startTime'])){
        return 1;        
    }
    else {return 4;}
}
?>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Responsive One Page website template</title>
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
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/submit.js"></script>
      
      <style>
         
      </style>
      
</script>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>CONTACT US: <strong>0800 200 200</strong> | <strong>contact@sampledomain.com</strong></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>One</strong>page</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Home</a></li>
                     <li><a href="#features">Features</a></li>
                     <li><a href="#about-us">About Us</a></li>
                     <li><a href="#our-work">Our Work</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="img/first.jpg" alt="">
                  <div class="line"> 
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>Free Onepage Responsive Template</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/second.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s"> 
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>Fully Responsive Components</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/third.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>Build new Layout in 10 minutes!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
         
    <div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active" style = "height:278px;">
       <form  method = "post" id="myForm" name  = "details" > 
            <div class= " col-lg-offset-1 col-md-offset-1 col-lg-2col-lg-2 col-md-2 col-sm-12 " align= "middle">
                 <label style= "color:white;" >From </label>
                    <div class = "form-group">
                        <select class = "form-control" id="From" name = "From" required>
                           <option selected disabled>source</option>
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
                        <select class = "form-control" id="To" name = "To" required>
                            <option selected disabled>destination</option>
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

      <input type="date" id="start_date" name="start_date" class="datepicker form-control" placeholder="From" required value="<?php if(isset($_SESSION['start_date'])){
                               echo $_SESSION['start_date'];}
                            
                            ?>">
      </div>
    

    <div class="col-lg-2 col-md-2 col-sm-12 text-center pagination-centered">
        <label style= "color:white;" >End Date</label>
    <input type="date" id="end_date" name="end_date" class="datepicker form-control" placeholder=" To" required value="<?php if(isset($_SESSION['end_date'])){
                               echo $_SESSION['end_date'];}
                            
                            ?>">
</div>
   <div class="col-lg-2 col-md-2 col-sm-12  text-center pagination-centered">
      <label style = "color:white;">Time</label>
    <div class = "form-group">
        <input type = "time" id="startTime" name = "startTime" style="height: 34px; width:130px; border-radius: 4px;" required value="<?php if(isset($_SESSION['startTime'])){
                               echo $_SESSION['startTime'];}
                            
                            ?>">
    </div>
   </div>
<hr style="border:none;">
<hr style="border:none;"><br>

<a data-toggle="tab" href= "#menu1" style = "text-decoration:none; float:right;"><input type="button" onclick="submitmenu1();" name="next" class = "btn btn-primary placeNext" style = "float:right;" value="Next"/></a>
        </form>
    </div>
      
    <div id="menu1" class="tab-pane fade" style = "height:278px; " align= "middle"><br><br>
        <form  method = "post" id="myForm1" >
      <div class="margin Vechicle">
                  <div class = "s-12 m-4 l-4 ">
                     <a data-toggle="tab" href="#menu2"><input type="button" class = "btn btn-primary" onclick="submitmenu2();" id="vehical_type1" value = "3-seater" name = "3-car" /></a>
                  </div>
                  <div class = "s-12 m-4 l-4">
                   <a data-toggle="tab" href="#menu2"> <input type="button" class = "btn btn-primary" onclick="submitmenu4();" id="vehical_type2" value = "7-seater" name = "7-car" /></a>
                  </div>
                  <div class = "s-12 m-4 l-4">
                   <a data-toggle="tab" href="#menu2"> <input type="button" class = "btn btn-primary" onclick="submitmenu5();" id="vehical_type3" value = "12-seater" name = "12-car" /></a>
                  </div>
               </div>
            </form>
    </div>
      
    <div id="menu2" class="tab-pane fade" style = "height:278px;">
                           <h1>Your Personal Details</h1>
               <form class = "form-horizontal" id="myForm2" role = "form" name = "insert" method= "post">
                                        <div class= "row">
                                            <div class = "col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class= "form-group">
                                            <input type= "text" class = "form-control" id="name" placeholder= "Your Name" name = "name" required>
                                        </div>
                                        </div>
                                            <div class = "col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class= "form-group">
                                            <input type= "text" class = "form-control" id="RegNo" placeholder= "Registration Number" name = "RegNo" required>
                                        </div>
                                        </div>
                                            <br><br>
                                            <div class = "col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class= "form-group">
                                         <input type= "text" class = "form-control" id="email" placeholder= "Email Id" name = "email" required>
                                        </div>
                                        </div>
                                            <div class = "col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class= "form-group">
                                            <input type= "text" class = "form-control" id="number" placeholder= "Contact Number" name = "number" required>
                                        </div>
                                        </div>                            
            </div>
                   <a data-toggle= "tab" href= "#menu3" style = "text-decoration:none; float:right;"><input type="button" onclick="submitmenu3();" class = "btn btkn-primary" value="Next"/></a>
         
               </form>
    </div>
    <div id="menu3" class="tab-pane fade" style = "height:278px;">
      <div class="row">
               <div class = "col-lg-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 ">
               <h2 class="section-title">Terms and Conditions</h2>
               </div>
            </div>
            <div class = "row">
               
            <div class = "col-lg-offset-3 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 ">      
                <form action="index.php" method="post"> <input type="checkbox" id="HTML" value="HTML" style="margin:5px;" required><label for="HTML" style="display: inline;">I accept the Terms and Conditions</label><br> 
				 <br>
                                 <button class="btn btn-default" type="submit" name="termsncondition">I accept & Confirm Booking</button><br><br></form>
                  </div>
             <br><br>
               </div>
    </div>
  </div>
</div>
         
         
         <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h2 class="section-title">Our Work</h2>
               <div class="tabs">
                  <div class="tab-item tab-active">
                    <a class="tab-label active-btn">Web Design</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por1.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por4.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por6.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por3.jpg" alt=""></a></div>
                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">Development</a>        
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por7.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por5.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por1.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por2.jpg" alt=""></a></div>
                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">Social Campaigns</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por4.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por6.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por3.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por5.jpg" alt=""></a></div>
                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">Photography</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por7.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por2.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por5.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por6.jpg" alt=""></a></div>
                      </div>
                    </div>  
                  </div>
               </div>
            </div>
         </div>         
         <!-- SERVICES -->
         
         <!-- LATEST NEWS -->
         <div id="latest-news">
            <div class="line">
              <h2 class="section-title">Latest News</h2> 
              <div class="margin">
                <div class="s-12 m-6 l-6">
                  <div class="s-12 l-2">
                    <div class="news-date">
                      <p class="day">28</p><p class="month">AUGUST</p><p class="year">2015</p>
                    </div>
                  </div>
                  <div class="s-12 l-10">
                    <div class="news-text">
                      <h4>First latest News</h4>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    </div>
                  </div>   
                </div> 
                <div class="s-12 m-6 l-6">
                  <div class="s-12 l-2">
                    <div class="news-date">
                      <p class="day">12</p><p class="month">JULY</p><p class="year">2015</p>
                    </div>
                  </div>
                  <div class="s-12 l-10">
                    <div class="news-text">
                      <h4>Second latest News</h4>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    </div>
                  </div>   
                </div>  
              </div>
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
                     <h3>Vision Design - graphic zoo</h3>
                     <address>
                        <p><strong>Adress:</strong> Gallayova 19, 841 02 Bratislava</p>
                        <p><strong>Country:</strong> Slovakia - Europe</p>
                        <p><strong>E-mail:</strong> info@visiondesign.sk</p>
                     </address>
                     <br />
                     <h3>Social</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d16.569872019090596!3d48.23131953825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>
         </div>
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2016, Vision Design - graphic zoo</p>
               <p>All images is purchased from Bigstock. Do not use the images in your website.</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        });
         
      </script>
      
    </script>
   </body>
</html>