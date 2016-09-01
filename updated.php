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
	      <li><a href="adminpage.php" ><em><b>Back</b></em></a></li>
          <li><a href="index.html" ><em><b>Sign out</b></em></a></li>
		  
          
        </ul>
      </div>
    </div>
    
  </div>
  
  
  <div>
  <?php 
  session_start();
    echo "<br><br><br><div style='text-align:center'><br><br><a><b>Product with ID= ".$_SESSION['productID']." updated to  <br> Quantity= ".$_SESSION['quantity']."</b></a></div>";
  
   ?></div>
  </body>
  </html>