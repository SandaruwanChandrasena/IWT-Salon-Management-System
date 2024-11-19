<?php


include 'connect.php';

$sql= "SELECT * FROM appointment;";
$all_app= $conn->query($sql);
$sql2="SELECT * FROM available_times;";

$all_times=$conn->query($sql2);

if(isset($_GET['deletid'])){

    $id=$_GET['deletid'];

    $sql="DELETE FROM appointment where AID  =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully Deleted');
		window.location.href='adminapintment.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
}

if(isset($_GET['deletid2'])){

  $id2=$_GET['deletid2'];

  $sql="DELETE FROM available_times where TID  =$id2";
  $result=mysqli_query($conn,$sql);
  if($result){
      echo"
      <script>
      alert ('Successfully Deleted');
  window.location.href='adminapintment.php';

     

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
  
  
  
  <h2 align="center"></h2><br><br>

  <table border="1" >
  <tr>
    <th>AID </th>
    <th>CID</th>
	<th>Date</th>
	<th>Time</th>
	<th>Service</th>
	
    <th>Delet</th>

  </tr>
  <?php

while($row=mysqli_fetch_assoc($all_app)){
	$id=$row['AID'];


?>
  <tr>
	
    <td><?php  echo $row['AID'] ;  ?></td>
    <td><?php  echo $row['CID'] ;      ?></td>
    <td><?php  echo $row['Date'] ;      ?></td>
	<td><?php  echo $row['Time'] ;      ?></td>
	<td><?php  echo $row['Service'] ;      ?></td>
	
<?php	echo'
	<td><button id="dbt" style="width:55px"><a href="adminapintment.php?deletid='.$id.'" style="color:black;">Delet</a></button></td>
	
  </tr> '?>
 
 
  
  <?php
    }




?>
		

    
</table>
 
  
  </form>
  <br>

 <h1>Available Times</h1>
 <form action="addtime.php" method="post">
  
 <label>ADD Times:</label>
          <input type="text" id="time" name="time" required/>
          <button name= "ADD" >ADD</button>
</form>
  <table border="1" >
  <tr>
    <th>Times </th>
    <th>Delet</th>

  </tr>
  <?php

while($row=mysqli_fetch_assoc($all_times)){
	$id2=$row['TID'];


?>
  <tr>
	
    <td><?php  echo $row['Times'] ;  ?></td>

	
<?php	echo'
	<td><button id="dbt" style="width:55px"><a href="adminapintment.php?deletid2='.$id2.'" style="color:black;">Delet</a></button></td>
	
  </tr> '?>
 
 
  
  <?php
    }




?>
		

    
</table>
 
  
  
  </div>	
   

</body>
</html>
