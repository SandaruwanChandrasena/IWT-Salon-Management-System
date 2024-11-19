<?php


include 'connect.php';

$sql= "SELECT * FROM customer;";
$all_customers= $conn->query($sql);


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
    <h1 align="center">Customers</h1>

  <table border="1" >
<form>
  <tr>
  <th>CID</th>
    <th>Customer Name</th>
    <th>Email</th>
	<th>Phone Number</th>
	<th>Birthdate</th>
	<th>Password</th>
    <th>Address</th>
    <th>Delet</th>

  </tr>
  <?php

while($row=mysqli_fetch_assoc($all_customers)){
	$id=$row['CID'];
	
?>
  <tr>
  <td><?php  echo $row['CID'] ;  ?></td>
    <td><?php  echo $row['Full_name'] ;  ?></td>
    <td><?php  echo $row['email'] ;      ?></td>
    <td><?php  echo $row['phone'] ;      ?></td>
	<td><?php  echo $row['birthdate'] ;      ?></td>
    <td><?php  echo $row['pass'] ;      ?></td>
	<td><?php  echo $row['address'] ;      ?></td>
	
<?php	echo'
	<td><button id="dbt" style="width:55px"><a href="deletmember.php?deletid='.$id.'" style="color:black;">Delet</a></button></td>
	
  </tr> '?>
 
 
  
  <?php
    }




?>
		

    
</table>
 
</div>

</body>
</html>
