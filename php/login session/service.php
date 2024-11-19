<?php


include 'connect.php';

$sql= "SELECT * FROM services;";
$all_product= $conn->query($sql);


?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>project</title>
	<link rel="stylesheet" type="text/css" href="../../styles/services.css">
	
</head>
<style>
	
</style>
<body>
	
<nav class="nav">
	<div id="divn"><img src="../../src/logo.png"></div>
	<div class="nav1">
	<ul>
	<li><a href="Home.php">Home</a></li>
	
		<li><a href="service.php">Services</a></li>
		<li><a href="aboutus.php">About</a></li>
		<li><a href="product.php">Shop</a></li>
		<li><a href="../../blog-log.html">Blog</a></li>
		<li><a href="../../contactUs-log.html">Contactus</a></li>
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li>
	
		<li><a href="useraccount.php"><img src="../../src/user.png" width="30px" height="30px"></a></li>
	</ul>
	
	
	
	</nav>
	<div class="container-1">
		<div id="toptext">Salon Services<br></div>
		<div id="div2"><button class="bt" onclick="location.href='booking.php'"><span>Get Appontment</span></button></div>
		
			
		</div>
	</div>
	
	<h1 align="center"><ul>Services And Packages</ul></h1>
    <?php

    while($row=mysqli_fetch_assoc($all_product)){

?>
  
  <div class="productc" style="text-align: center; float: left;background-color: white;">
	<div id="pimg" style="float: left;width:30%;"> <h3><?php   echo $row['service_name'] ;   ?></h3>
		<img src="<?php echo $row['img_path']; ?>" alt="" style="width:70%;"></div>
	<div id="pdescription" style="float: left;width: 70%;height: 100%; padding-top: 90px;">
	<p style="width:90%;font-size:20px;font-weight:bold;color:#707070;"><?php   echo $row['description'];    ?>
	</p>
	<p style="width:120%;font-size:20px;font-weight:bold;color:#707070;"> Starting Price:$<?php   echo $row['price']  ;  ?></p>
    
</div>
    
    
  </div>
  <hr>
  <?php
    }




?>
 
  
  
  
  

  
  
  
  
    
         



</body>
</html>
