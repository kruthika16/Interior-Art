<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Login</title>
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
              <h3><b>Log in</b></h3>
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
$email = $userpassword  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
   if (empty($_POST["email"])) {
     $Err=$emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $Err=$emailErr = "Invalid email format"; 
     }
   }
     
   
   if (empty($_POST["password"])) {
     $Err=$passwordErr = "Password can't be empty";
   } else {
     $userpassword= test_input($_POST["password"]);
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
if(isset($_SESSION['customerID']))
 echo "<br><br><a>You are already logged in</a>";
else{
session_start();

if(isset($_POST['submit']) AND $Err==NULL)
{
$email = trim($_POST['email']);
$userpassword = trim($_POST['password']);
$query = "SELECT customer_ID,username, password FROM customer WHERE username='$email' AND password='$userpassword'";

$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['customerID']=$row[0];
 $sql="INSERT into login_details(customer_ID,username,password) VALUES ('$row[0]','$email','$userpassword')";
 if ($conn->query($sql) === TRUE) {
    
     echo '<meta http-equiv="refresh" content="0;URL=/index.html" />';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
  else
     {
 echo 'Invalid Username or Password';
  }
 }
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
               <footer class="clearfix">

                    <p><a href="best.php"><b>New user? Sign up!</b></a></p>
					<p><a href="adminlogin.php"><b>Admin login</b></a></p>

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