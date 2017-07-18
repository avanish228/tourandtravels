


<html lang="en-us">
   <head> 
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>The Dark registration</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h3 class="animated bounceInDown">The Dark</h3>
      <div class="form">
         <div class="header">
            <h2>User Registration</h2>
         </div>
         <br>
         <div class="login"><form method="post" action="submit.php" onsubmit="return matchpass()">
            <ul>
               <li>
                  <span class="un"></span><input type="text"   name="name" placeholder="Enter name" class="text" onsubmit="return validateform()">
               </li>
			   <li>
                  <span class="un"></span><input type="email" name="email" required class="text email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
               </li>
			   <li>
                  <span class="un"></span><input type="text"   name="uname" placeholder="Enter Username" class="text" >
               </li>
               <li>
                  <span class="un"></span><input type="password" name="pwd" required class="text password" placeholder="User Password"  autocomplete="off">
               </li>
               <li>
                  <span class="un"></span><input type="text"   name="mobile" placeholder="Enter Mobile Number" class="text" >
               </li>
			   <li>
                  <span class="un"></span><textarea type="text"   name="saddress" placeholder="Enter Address" class="text" ></textarea>
               </li>
               <div class="down">
                  <li>
                     <input type="submit" name="login" value="SUBMIT" class="btn btn_login"/>
                  </li>
                  
               </div>
            </ul></form>
            <div class="preload" style="display:none;">
               <center>
                  <div class="loader"><img src="preloader/preloader.gif" height="60" width="60"></div>
               </center>
            </div>
         </div>
         <br>
      </div>
     
   </body>
</html>