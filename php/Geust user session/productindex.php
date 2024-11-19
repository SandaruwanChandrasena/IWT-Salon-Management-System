<?php


include 'connect.php';


$sql= "SELECT * FROM product;";
$all_product= $conn->query($sql);


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>project</title>
	<link rel="stylesheet" type="text/css" href="../../styles/shop.css">
	
</head>
<style>
	
</style>
<body>
	
<nav class="nav">
	<div id="divn"><img src="../../src/logo.png"></div>
	<div class="nav1">
	<ul>
    <li><a href="index.php">Home</a></li>
		<li><a href="index-service.php">Services</a></li>
		<li><a href="aboutus.php">About</a></li>
		<li><a href="productindex.php">Shop</a></li>
		<li><a href="../../blog.html">Blog</a></li>
		<li><a href="../../contactUs.html">Contactus</a></li>
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li>
		<li><a></a></li>
		
		<li><a href="register.php"><img src="../../src/user.png" width="30px" height="30px"></a></li>
	</ul>
	</div>
	
	
	</nav>
	<div class="container-1">
		<div id="toptext">Salon Products<br></div>
		
			
		</div>
	</div>
	
	<h1 align="center">Salon Shop</h1>

	<?php

while($row=mysqli_fetch_assoc($all_product)){
	$id=$row['product_id'];

?>
  <form action="../login session/orders.php" method="post">
  <div class="productc" style="text-align: center; float: left;background-color: white;">
	<div id="pimg" style="float: left;width:30%;"> <h3 name="pname"><input type="text" style="width:80%;font-size:20px;font-weight:bold;color:#707070;"name="name" value="<?php  echo $row['product_name'] ;      ?>" readonly></h3>
		<img src="<?php  echo $row['img_path'];     ?>" alt="" style="width:70%;"></div>
	<div id="pdescription" style="float: left;width: 70%;height: 100%; padding-top: 90px;">
	<p ><h3 style="color:#707070;"><span><?php  echo $row['description'] ;      ?></span>
	</p>
	<p >Price:<input type="text" name="price"  value="<?php  echo $row['price'] ;      ?>" readonly></input></p>
	<lable>Quantity:</lable><input type="number" name="quantity" value="1" id="qa" width="10px" style="width:40px;border-radius:5px;"><br>
   
	<button name="submit" >Order Now</button>
	</form>
</div>
    
    
  </div>
  <hr>
  <?php
    }




?>
 

  
  
		
         

		
	

</body>
</html>
