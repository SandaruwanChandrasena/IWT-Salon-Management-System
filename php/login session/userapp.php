<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.html');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if(isset($_GET['cancel'])){
	$id=$_GET['cancel'];
	
    $sql="DELETE FROM appointment where AID  =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully cancelled');
		window.location.href='userapp.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
	
	
	header('location:useraccount.php');
 };





?>









<!DOCTYPE html>
<html>
<head>
  <title>User Account</title>
 
  <link rel="stylesheet" type="text/css" href="../../styles/useracc.css">

  <style>
	.nav2 ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 200px;
	font-size: 27px;
	color:white;
    font-weight:bold;
	
  }
  
  .nav2 li a {
	display: block;
    color:white;
	padding: 8px 16px;
	text-decoration: none;
  }
  
  /* Change the link color on hover */
  .nav2 li a:hover {
	background-color: #555;
	color: white;
  }
  table{
    
    font-family:Georgia, 'Times New Roman', Times, serif;
    width:100%;
    border-radius: .5rem;
    border-color: black;
    background-color:rgb(219, 213, 217);
    color: #000000;
    font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
    overflow: auto;
    overflow: overlay;
    box-shadow: 0 .4rem .8rem #0005;
  }
 
  table th  {
    border-collapse: collapse;
    padding: 1rem;
    border-radius: .5rem;
    text-align: left;
    background-color: #6e6b6b;
    

}
.table__body::-webkit-scrollbar{
  width: 0.5rem;
  height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
  border-radius: .5rem;
  background-color: #0004;
  visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
  visibility: visible;
} table th  {
    border-collapse: collapse;
    padding: 1rem;
    border-radius: .5rem;
    text-align: left;
    background-color: #6e6b6b;
    

}


</style>

</head>
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
		</div>
		
		
		</nav>
		<div style="height:800px;">
	<div id="userpoto" style="height:100%;width:30%;">
  <header>
  <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `customer` WHERE CID ='$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>
    <h1 >Welcome,<br><?php echo $fetch_user['Full_name']; ?></h1>
	<img src="../../src/useracc.png" width="50%" height="20%" >
	<button id="bt"><a href="useraccount.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a></button>
   <br><br><br> <div class="nav2">
	<ul type="none" style="list-style-type: none;width:100%;padding-left:5px;">

    <li><a href="useraccount.php">Personal Details</a></li><br><br>
    <li><a href="userorders.php">My Orders</a></li><br><br>
  <li><a href="userapp.php">My Appointments</a></li><br><br>
 
  
</ul>
	</div>
</header>
  
</div>
<div class="vl"></div>
<div id="info" style="height:100%;width:70%;background-image:url('../../src/Useracc.jpg')">

   
  
  <div id="apointment" style="align-items=center;color:white;"><h1>Appointments</h1>
  <table>
  <tr>
    <th>Appointment ID</th>
    <th>Date</th>
	<th>Time</th>
	<th>Service</th>
    <th>Delet</th>

  </tr>
    
  <tr>
  <?php
      $select_user2 = mysqli_query($conn, "SELECT * FROM `appointment` WHERE CID ='$user_id'") or die('query failed');
	  while($row=mysqli_fetch_assoc($select_user2)){
	
	
	?>
	
    <td><?php echo $row['AID']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['Time']; ?></td>
	<td><?php echo $row['Service']; ?></td>
	<td><button id="bt"><a href="useraccount.php?cancel=<?php echo $row['AID']; ?>" onclick="return confirm('are your sure you want to cancel?');" class="delete-btn">Cancel</a></button></td>
	

	</tr>

	<?php

};

?>
	</table>
	
	

</div>

</div>
</div>
<div class="footer-main">

<div id="footer">
  <div id="footer1">
 <h2 style="color: white;text-align: center;">About</h2> <br>
	 <ul type="none">
	 
 <li><a href="../blog.html">Blogs</a></li><br>
 <li><a href="aboutus.php">About Salon</a></li><br>
 <li><a href="">Privacy</a></li><br>
 <li><a href="">FAQ</a></li>
 </ul>
</div>
<div id="footer2">
<h2 style="color: white;text-align: center;">Services</h2> <br>
<ul type="none" >
  <li><a href="service.php">Beauty Salon</a></li><br>
  <li><a href="service.php">Hair Treatments</a></li><br>
  <li><a href="service.php">Makeup</a></li><br>
  <li><a href="service.php">Body Treatments</a></li>
  </ul>
</div>
<div id="footer3">
<h2 style="color: white;text-align: center;">Contact</h2>
<ul type="none">
  <li><img src="../../src/location.png" width="8%"><span style="color: white;">Location</span>
  <br>523 Main Street, New York
</li><br>
  <li><img src="../../src/phone-call.png" width="8%"><span style="color: white;">Hotline</span>
	<br>Call : +012 (345) 6789</li><br>
  <li><img src="../../src/email.png" width="8%"><span style="color: white;">Email</span>
	<br><a href="">support@gmail.com</a></li>
  
  </ul>
</div>
<div id="footer4"> 
<h2 style="color: white;text-align: center;">Visit us</h2>
<br>
<a href=""><img src="../../src/facebook.png" width="10%"></a><br><br>
<a href=""><img src="../../src/instagram.png" width="10%"></a><br><br>
<a href=""><img src="../../src/twitter.png" width="10%"></a>
</div>
	<hr>
<h4>© 2022 IWT Team-5, All Rights Reserved

</h4>

</div>

</div>
</body>
</html>
