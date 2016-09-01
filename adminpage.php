<!DOCTYPE html >
<html>
<head>
<title>Interior Art | Admin Page</title>
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
          <li><a href="logout.php" ><em><b>Sign out</b></em></a></li>
          
        </ul>
      </div>
    </div>
    
  </div>
  
  <!-- CONTENT -->
  <div id="content">
        
    <div class="tail-middle2">
      <div class="row-2">
        <div class="indent3">
          <div class="container">
            <div class="col-1">
              <h3><b>Update</b></h3>
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

$query = "SELECT product_ID,quantity FROM product WHERE product_ID='$productID'";

$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['productID']=$row[0];
 $_SESSION['quantity']=$quantity;
 $sql=" UPDATE product SET quantity=$quantity WHERE product_ID='$row[0]'";
 if ($conn->query($sql) === TRUE) {
    
     echo '<meta http-equiv="refresh" content="0;URL=/updated.php" />';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
  else
     {
 echo 'Invalid Product ID';
  }
 }
}
$query="SELECT product_ID,quantity FROM product";
 
$result = mysqli_query($conn,$query);
    echo "<table border='1'><tr><th>Product ID</th><th>Quantity</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['product_ID'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

$conn->close();

?>
			  <p><span class="error">* required fields</span></p>
              <p>Enter product ID to Update Quantity</p>
			  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <input type="text" placeholder="Product ID" name="productID">
   <span class="error">*<?php echo $productIDErr;?></span>
   <br><br>
  <p>Enter quantity to update to</p>
   <input type="number" placeholder="Quantity" name="quantity">
   <span class="error">*<?php echo $quantityErr;?></span>
   <br><br>
   
  <input type="submit" name="submit" value="Update"> 
</form>
              
            </div>
            <div class="col-2">
              <h3><b>All Products</b></h3>
              <div class="indent2">
                
				  
				<link href="grid-style.css" rel="stylesheet" type="text/css" />
				 <div class="grid">
				 
					
					<br><br>
						<div id="c1"><img src="images/s1.jpg" alt="Robins Lounge Chair (Aqu) 7499" style="width:160px;height:160px"><br>
						<p>Robins Lounge Chair(Aqu)     Rs.7499/-<br>PRODUCT ID: s1<br></p><br><br></div>
						<div id="c2"><img src="images/s2.jpg" alt="milo Wing chair (olive) 18999" style="width:160px;height:160px"><br>
						<p>Milo Wing chair(olive)   Rs.18999/-<br>PRODUCT ID: s2</p><br><br></div>
						<div id="c3"><img src="images/s3.jpg" alt="Appolo letherette sofa(chocolate) 37999" style="width:160px;height:160px"><br>
						<p>Appolo letherette sofa (chocolate)     Rs.37999/-<br>PRODUCT ID: s3</p><br><br></div>
						<div id="c4"><img src="images/s4.jpg" alt="Howe Chair (Mahagony finish) 3999" style="width:160px;height:160px"><br>
						<p>Howe Chair (Mahagony finish)   Rs.3499/-<br>PRODUCT ID: s4</p><br><br></div>
						<div id="c5"><img src="images/s5.jpg" alt="Recliner la-Z boy (Chestnut) 59999" style="width:160px;height:160px"><br>
						<p>Recliner la-Z boy (Chestnut)    Rs.59999/-<br>PRODUCT ID: s5</p><br><br></div>
						<div id="c6"><img src="images/s6.jpg" alt="Elicca Leather sofa(cappuchino) 74999" style="width:160px;height:160px"><br>
						<p>Elicca Leather sofa (cappuchino)  Rs.74999/-<<br>PRODUCT ID: s6</p><br><br></div>
                                                   
                        <div id="c1"><img src="images/5.jpg" alt="Queen Size Double Bed 7999" style="width:160px;height:160px"><br>
						<p>Queen Size Double Bed   Rs.7999/-<br>PRODUCT ID: b1</p><br><br></div>
						<div id="c2"><img src="images/3.jpg" alt="Cinnamon Four Poster King Size Bed 26999" style="width:160px;height:160px"><br>
						<p>Cinnamon Four Poster King Size Bed  Rs. 26999/-<br>PRODUCT ID: b2</p><br><br></div>
						<div id="c3"><img src="images/4.jpg" alt="Sailor Single Kids Bed with Storage  29999" style="width:160px;height:160px"><br>
						<p>Sailor Single Kids Bed with Storage  Rs.29999/-<br>PRODUCT ID: b3</p><br><br></div>
						
						<div id="c4"><img src="images/bs1.jpg" alt="Rio Bedside Tab 4999" style="width:160px;height:160px"><br>
						<p>Rio Bedside Table  <br>  Rs.4999/-<br>PRODUCT ID: b4</p><br><br></div>
                        <div id="c5"><img src="images/bs2.jpg" alt="Alegria Bed Side Table(Walnut) 3999" style="width:160px;height:160px"><br>
						<p>Alegria Bed Side Table<br>(Walnut)   Rs.3999/-<br>PRODUCT ID: b5</p><br><br></div>
						<div id="c6"><img src="images/bs3.jpg" alt="Tina Solidwood Bedside Table 10999" style="width:160px;height:160px"><br>
						<p>Red Cherry Bedside Table <br> Rs. 13999/-<br>PRODUCT ID: b6</p><br><br></div>
   
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
						
						<div id="c1"><img src="images/w1.jpg" alt="Templeton Wardrobe 36999" style="width:160px;height:160px"><br>
						<p>Templeton Wardrobe Rs.36999/-<br>PRODUCT ID: w1</p><br><br></div>
						<div id="c2"><img src="images/w2.jpg" alt="Ivory Four Door Wardrobe 32999" style="width:160px;height:160px"><br>
						<p>Ivory Four Door Wardrobe  Rs. 32999/-<br>PRODUCT ID: w2</p><br><br></div>
						<div id="c3"><img src="images/w3.jpg" alt="Addison Four Door Wardrobe 57999" style="width:160px;height:160px"><br>
						<p>Addison Four Door Wardrobe Rs.57999/-<br>PRODUCT ID: w3</p><br><br></div>
						<div id="c4"><img src="images/st3.jpg" alt="Sliding Shoe Rack(Dark Walnut) 4599" style="width:160px;height:160px"><br>
						<p>Sliding Shoe Rack(Dark Walnut) Rs.4599/-<br>PRODUCT ID: w4</p><br><br></div>
						<div id="c5"><img src="images/st4.jpg" alt="Zig Zag Book Shelf 8499" style="width:160px;height:160px"><br>
						<p>Zig Zag Book Shelf  Rs.8499/-<br>PRODUCT ID: w5</p><br><br></div>
						<div id="c6"><img src="images/st5.jpg" alt="Glass Door Crockery Cabinet 26999" style="width:160px;height:160px"><br>
						<p>Glass Door Crockery Cabinet Rs.26999/-<br>PRODUCT ID: w6</p><br><br></div>
					
                   </div>
				 </div>
            </div>
        </div>
    </div>
  </body>
  </html>