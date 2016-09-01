<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<!--<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>-->
</head>
<body id="page1">
<div class="tail-bottom">
  <!-- HEADER -->
  <div id="header">
    <div class="row-1">
      <div class="fleft"><a href="index.html"><img src="images/logo.gif" alt="" /></a></div>
      <div class="fright">
        <ul>
          <li><a href="index.html" ><em><b>Home</b></em></a></li>
          <li><a href="designer.html" ><em><b>Interior Designer</b></em></a></li>
		  <li><a href="cart.html"><em><b>Cart</b></em></a></li>
		  <li><a href="login.php"><em><b>Login</b></em></a></li>
		  <li><a href="register.php" class="active"><em><b>Sign Up</b></em></a></li>
          
        </ul>
      </div>
    </div>
    
<!-- CONTENT -->
  <div id="content">
        
    <div class="tail-middle2">
      <div class="row-2">
        <div class="indent3">
          <div class="container">
           
            <div class="col-2">
              <h3><b>Sign Up</b></h3>
              <div class="indent2">
                 <div id="login-form">
				 <link rel="stylesheet" href="loginstyle.css" media="screen" type="text/css" />
				 
        <fieldset>

            
<style>
.error {color: #FF0000;}
</style>

<?php
// define variables and set to empty values
$emailErr = $passwordErr =$firstnameErr=$lastnameErr=$confirmpasswordErr= "";
$email = $password  =$firstname=$lastname=$confirmpassword= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
	 
    if (empty($_POST["firstname"])) {
     $firstnameErr = " Firstname is required";
   } else {
     $firstname= $_POST["firstname"];
   }
   
   if (empty($_POST["lastname"])) {
     $lastnameErr = " Lastname is required";
   } else {
     $lastname=$_POST["lastname"];
   }
   
   if (empty($_POST["password"])) {
     $passwordErr = " Password can't be empty";
   } else {
     $password= test_input($_POST["password"]);
   }
   
     
   if($_POST["password"]!=$_POST["confirmpassword"])
     $confirmpasswordErr="Password do not match";
	else
	  $confirmpassword=$_POST["confirmpassword"];

   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required fields</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <input type="text" placeholder="First Name" name="first name">
   <span class="error">*<?php echo $firstnameErr;?></span>
   <br><br>
   <input type="text" placeholder="Middle Name" name="middle name"><br><br>
   <input type="text" placeholder="Last Name" name="last name">
   <span class="error">*<?php echo $lastnameErr;?></span>
   <br><br>
   <input type="text" placeholder="Email" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   <input type="password" placeholder="password" name="password">
   <span class="error">*<?php echo $passwordErr;?></span>
   <br><br>
   <input type="password" placeholder="Re-enter password" name="confirmpassword">
   <span class="error">*<?php echo $confirmpasswordErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
               <footer class="clearfix">

                    <p><a href="login.php"><b>Already have an account? Log In!</b></a></p>

                </footer>


</body>
</html>

        </fieldset>

    </div> <!-- end login-form -->
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>