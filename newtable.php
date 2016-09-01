<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Dining Tables</title>
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
		  <li><a href="newcart.php"><em><b>Cart</b></em></a></li>
		  <li><a href="sessiontrial.php"><em><b>Login</b></em></a></li>
		  <li><a href="best.php" ><em><b>Sign Up</b></em></a></li>
          
          
        </ul>
      </div>
    </div>
    <div class="row-2">
      <ul>
        <li><a href="newsofas.php" >Sofas & Seating</a></li>
        <li><a href="newbed.php">Bed & Bedsides</a></li>
        <li><a href="newtable.php" class="active">Dining Tables</a></li>
        <li><a href="newstorage.php">Wardrobes & Storage</a></li>
        
	</ul>
    </div>
    <div class="extra"><img src="images/header-img.jpg" alt="" /></div>
  </div>
  
  <!-- CONTENT -->
  <div id="content">
        
    <div class="tail-middle2">
      <div class="row-2">
        <div class="indent3">
          <div class="container">
            <div class="col-1">
              <h3><b>Selection</b></h3>
			  <style>
.error {color: #FF0000;}
</style>

<?php


// define variables and set to empty values
$productIDErr = $quantityErr =$Err= "";
$productID = $quantity  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
   if (empty($_POST["productID"])) {
     $Err=$productIDErr = " <br>Product ID is required";
   }
   else
    $productID=$_POST["productID"];
     
	 
    if (empty($_POST["quantity"])) {
     $Err=$quantityErr = "  <br>Quantity can't be empty";
   }
   else if(($_POST["quantity"])>10) {
     $Err=$quantityErr = "can't order more that 10 units at a time";
   }
   else if(is_int($_POST["quantity"]))
     $Err=$quantityErr="<br> Quantity must be integer";
   else
    $quantity=$_POST["quantity"];
   
    
}


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
else{ 

session_start();

if(isset($_POST['submit']) AND $Err==NULL)
{

$query = "SELECT product_ID,unitprice FROM product WHERE product_ID='$productID'";

$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['productID']=$row[0];
 $_SESSION['quantity']=$quantity;
 $customerID=$_SESSION['customerID'];
 $sql="INSERT INTO cart(customer_ID,product_ID,quantity,unitprice) VALUES ('$customerID','$row[0]','$quantity','$row[1]')";
 if ($conn->query($sql) === TRUE) {
    
     echo '<meta http-equiv="refresh" content="0;URL=/newcart.php" />';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
}
$conn->close();
}
?>
			  <p><span class="error">* required fields</span></p>
              <p>Enter product ID to add to cart</p>
			  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <input type="text" placeholder="Product ID" name="productID">
   <span class="error">*<?php echo $productIDErr;?></span>
   <br><br>
  <p>Enter quantity</p>
   <input type="number" placeholder="Quantity" name="quantity">
   <span class="error">*<?php echo $quantityErr;?></span>
   <br><br>
   
  <input type="submit" name="submit" value="Add to Cart"> 
</form>
              
            </div>
            <div class="col-2">
              <h3><b>Dining Tables</b></h3>
              <div class="indent2">
                
				  
				<link href="grid-style.css" rel="stylesheet" type="text/css" />
				 <div class="grid">
				 
					
					<br><br>
						<div id="c1"><img src="images/d1.jpg" alt="Bayley Dining Set(Walnut) 55999" style="width:160px;height:160px"><br>
						<p>Bayley Dining Set(Walnut)  Rs.55999/-<br>PRODUCT ID: t1</p><br><br></div>
						<div id="c2"><img src="images/d2.jpg" alt="Gurupi Dining Set (Multi-Colour) 30999" style="width:160px;height:160px"><br>
						<p>Gurupi Dining Set (Multi-Colour) Rs. 30999/-<br>PRODUCT ID: t2</p><br><br></div>
						<div id="c3"><img src="images/d3.jpg" alt="Napier Dining Set(Walnut) 102999" style="width:160px;height:160px"><br>
						<p>Napier Dining Set(Walnut) Rs.102999/-<br>PRODUCT ID: t3</p><br><br></div>
						<div id="c4"><img src="images/d4.jpg" alt="Cartagena Two Seater(Colonial Maple finish) 17999" style="width:160px;height:160px"><br>
						<p>Cartagena Two Seater(Colonial Maple finish)  Rs.17999/-<br>PRODUCT ID: t4</p><br><br></div>
						<div id="c5"><img src="images/d5.jpg" alt="Vitoria Dining Set(Colonial Maple) 44999" style="width:160px;height:160px"><br>
						<p>Vitoria Dining Set(Colonial Maple) Rs.44999/-<br>PRODUCT ID: t5</p><br><br></div>
					
                   </div>
				 </div>
            </div>
        </div>
    </div>
  </body>
  </html>