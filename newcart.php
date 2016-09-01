<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Shopping Cart</title>
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
          <li><a href="designer.html" ><em><b>Interior Designer</b></em></a></li>
		  <li><a href="newcart.php" class="active"><em><b>Cart</b></em></a></li>
		  <li><a href="sessiontrial.php"><em><b>Login</b></em></a></li>
		  <li><a href="best.php" ><em><b>Sign Up</b></em></a></li>
		            
        </ul>
      </div>
    </div>
    <div class="row-2">
      <ul>
        <li><a href="newsofas.php">Sofas & Seating</a></li>
        <li><a href="newbed.php">Bed & Bedsides</a></li>
        <li><a href="newtable.php">Dining Tables</a></li>
        <li><a href="newstorage.php">Wardrobes & Storage</a></li>
		<?php 
		//session_start();
		if(isset($_SESSION['customerID'])){ ?>
                     
       <li><a href="logout.php">Sign Out</a></li><?php }?>
          
        
	</ul>
    </div>
    <div class="extra"><img src="images/header-img.jpg" alt="" /></div>
  </div>
  
  <div>
  <?php 
  session_start();
  if(isset($_SESSION['customerID']))
  {
$customerID=$_SESSION['customerID'];
//connect to MySQL
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="my";
//$firstname=$_POST['firstname'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_SESSION['productID'])){
  
   echo "<br><br><br><div style='text-align:center'><br><br><a><b>Product with ID= ".$_SESSION['productID']." added to cart <br> Quantity= ".$_SESSION['quantity']."</b></a></div>";
 }
 $query="SELECT product_ID,quantity,unitprice FROM cart WHERE customer_ID='$customerID'";
 // else echo '<br><br><br><br><br><div align="center"><a><b>No products to display.<br>Your Shopping cart is currently empty.</b></a></div>';

$result = mysqli_query($conn,$query);
    echo "<table align='center' border='1'><tab><tr><th>Product ID</th><th>Quantity</th><th> Total Price</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['product_ID'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['unitprice']*$row['quantity']."</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>Confirm cart and proceed to payment by clicking on SUBMIT<br><br>";
echo '<input type="submit " onclick="buy.php"';
if (isset($_POST['submit'])){
  header("Location: buy.php");
}
mysqli_close($conn);
}

  else
  echo '<br><br><br><br><br><div align="center"><a><b>You have not logged in!<br> Log in first to start shopping</b></a></div>';
 ?></div>
  </body>
  </html>