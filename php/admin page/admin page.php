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
	<link rel="stylesheet" type="text/css" href="../../styles/admin.css">
	
</head>
<style>
	
</style>
<body>
	
<nav class="nav">
	<div id="divn"><img src="../../src/admin.png" width="80px"></div>
	<div class="nav1">
	<ul>
	<li><a href="admin page.php">Products</a></li>
        <li><a href=""></a></li>
		<li><a href="serviceedit.php">Services</a></li>
        <li><a href=""></a></li>
		<li><a href="editstaff.php">Staff </a></li>
        <li><a href=""></a></li>
		<li><a href="adminapintment.php">Appointments</a></li>
        <li><a href=""></a></li>
        <li><a href="adminorders.php">Orders</a></li>
        <li><a href="adminmembers.php">Members</a></li>
        <li><a href=""></a></li>
        
		<li></li>
		<li></li>
		
		
		
	</ul>
	</div>
	
	
	</nav>
	
	
<div id="main">
<h1 align="center" style="color:white;">All Products</h1>
  
  <form action="addproduct.php" method="post">
  
  <h2 align="center"><button id="abt" >Add Products</button></h2>
</form>
  <table border="1" >
<form>
  <tr>
  <th>Product ID</th>
    <th>Product Name</th>
    <th>Description</th>
	<th>Price</th>
	<th>Image path</th>
	<th>Edit</th>
    <th>Delet</th>

  </tr>
  <?php

while($row=mysqli_fetch_assoc($all_product)){
	$id=$row['product_id'];
	$n=$row['product_name'] ;
	$d=$row['description'] ; 
	$p=$row['price'] ;  
	$i=$row['img_path'] ;

?>
  <tr>
  <td><?php  echo $row['product_id'] ;  ?></td>
    <td><?php  echo $row['product_name'] ;  ?></td>
    <td><?php  echo $row['description'] ;      ?></td>
    <td><?php  echo $row['price'] ;      ?></td>
	<td><?php  echo $row['img_path'] ;      ?></td>
	
<?php	echo'<td><button id="ubt"style="width:40px"><a href="productupdate.php?updatetid='.$id.'" style="color:black;">Edit</a></button></td>
	<td><button id="dbt" style="width:55px"><a href="deletproduct.php?deletid='.$id.'" style="color:black;">Delet</a></button></td>
	
  </tr> '?>
 
 
  
  <?php
    }




?>
		

    
</table>
 
 
 

  
  
  </div>	
   

</body>
</html>
