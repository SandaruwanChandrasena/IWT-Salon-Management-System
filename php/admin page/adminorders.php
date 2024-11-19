<?php


include 'connect.php';

$sql= "SELECT * FROM orders;";
$all_orders= $conn->query($sql);
if(isset($_GET['deletid'])){

    $id=$_GET['deletid'];

    $sql="DELETE FROM orders where OID =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully Deleted');
		window.location.href='adminorders.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
}


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
  
 
  
  <h2 align="center"></h2>

  <table border="1">
<form>
  <tr>
    <th>OID </th>
    <th>CID</th>
	<th>Product Name</th>
	<th>Quantity</th>
	<th>Payment</th>
	
    <th>Delet</th>

  </tr>
  <?php

while($row=mysqli_fetch_assoc($all_orders)){
	$id=$row['OID'];


?>
  <tr>
	
    <td><?php  echo $row['OID'] ;  ?></td>
    <td><?php  echo $row['CID'] ;      ?></td>
    <td><?php  echo $row['Poduct_name'] ;      ?></td>
	<td><?php  echo $row['Quantity'] ;      ?></td>
	<td>$<?php  echo $row['Price'] ;      ?></td>
	
<?php	echo'
	<td><button id="dbt" style="width:55px"><a href="adminorders.php?deletid='.$id.'" style="color:black;">Delet</a></button></td>
	
  </tr> '?>
 
 
  
  <?php
    }




?>
		

    
</table>
 
  
  </form>

 

  
  
  </div>	
   

</body>
</html>
