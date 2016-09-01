<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Admin Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />

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
          <li><a href="designer.html"><em><b>Interior Designer</b></em></a></li>
		  <li><a href="newcart.php"><em><b>Cart</b></em></a></li>
          <li><a href="sessiontrial.php" class="active"><em><b>Login</b></em></a></li>
		  <li><a href="best.php"><em><b>Sign up</b></em></a></li>
          
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
              <h3><b>Admin Log in</b></h3>
              <div class="indent2">
                 <div id="login-form">
				 <link rel="stylesheet" href="loginstyle.css" media="screen" type="text/css" />
				 
        <fieldset>

            
<style>
.error {color: #FF0000;}
</style>

<?php
// define variables and set to empty values
$Err=$emailErr = $passwordErr = "";
$email = $password  = "";
$adminemail="admin@gmail.com";
$adminpassword="admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
   if (empty($_POST["email"])) {
     $Err=$emailErr = "Email is required";
   } else {if( test_input($_POST["email"])==$adminemail){
     $email = test_input($_POST["email"]);}
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $Err=$emailErr = "Invalid email format"; }
	   else{$Err="error";
	   echo "Invalid Email or Password";}}
    
           
   
   if (empty($_POST["password"])) {
     $Err=$passwordErr = " Password can't be empty";} 
	 else {
   if ( test_input($_POST["password"])==$adminpassword)
    { $password= test_input($_POST["password"]);
   }
   else {$Err="error";
    echo "Invalid Email or Password";}
	}
   }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

//connect to MySQL
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="my";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{ 

if(isset($_POST['submit'])&& $Err==""){
   
     echo '<meta http-equiv="refresh" content="0;URL=/adminpage.php" />';
} 
}
?>


<p><span class="error">* required fields</span></p>
<form method="post" > 
   <input type="text" placeholder="Email" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   <input type="password" placeholder="password" name="password">
   <span class="error">*<?php echo $passwordErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
              



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