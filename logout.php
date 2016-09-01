<!DOCTYPE html >
<html>
<head>
<title>Interior Art</title>
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
          <li><a href="index.html" class="active"><em><b>Home</b></em></a></li>
          <li><a href="designer.html"><em><b>Interior Designer</b></em></a></li>
		  <li><a href="newcart.php"><em><b>Cart</b></em></a></li>
          <li><a href="sessiontrial.php"><em><b>Login</b></em></a></li>
		  <li><a href="best.php"><em><b>Sign up</b></em></a></li>
		            
        </ul>
      </div>
    </div>
<?php
         session_start();
          if(session_destroy()){
      echo "<br><br><a><b>Thank you for visiting Interior Art!</b></a>";	         }
       ?>
	   <div><img src="images/thanks.jpg" style="width:160px;height:160px"><br></div>
</body>
<html>