<?php


include 'connect.php';

$sql= "SELECT * FROM staff;";
$all_staff= $conn->query($sql);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="../../styles/aboutUs">
    <title>About Us</title>

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
            
    <div class="wrapper">
        <div class="row">
            <div class="img-section">
                <img src="../../src/aboutUp.jpg" alt="">
            </div>
            <div class="content">
                <h1 style="font-size: 100px;">About Us</h1>
                <h2>Our Salon</h2>
                <p>Welcome to Our Salon, where beauty meets relaxation. At our salon, we believe that self-care is essential for both your inner and outer well-being. Step into our world of tranquility and indulge in a range of luxurious beauty treatments tailored to enhance your natural beauty.<br>
Our salon is more than just a salon; it's a sanctuary dedicated to providing you with an exceptional experience from the moment you walk through our doors. Our team of highly skilled and passionate professionals is committed to delivering personalized services that exceed your expectations.<br>
With a warm and inviting ambiance, we strive to create a haven where you can unwind, rejuvenate, and escape the stresses of everyday life. Whether you're seeking a fresh new hairstyle, a revitalizing facial, a pampering manicure, or a soothing massage, our extensive menu of services has something for everyone.<br>
We pride ourselves on using only the finest quality products that nourish and protect your skin and hair. Our expert stylists and technicians stay up to date with the latest trends and techniques, ensuring that you receive the highest level of care and leave feeling confident and beautiful.<br>
At Salon Name, we understand that each client is unique, and we take the time to listen to your needs and desires. Our consultations are thorough, allowing us to tailor our services to your individual preferences, ensuring that you leave with a look that suits your personality and lifestyle.<br>
We value the relationships we build with our clients and strive to create a friendly and welcoming atmosphere. Our team is dedicated to providing exceptional customer service, making your visit to Salon Name an unforgettable experience every time.
Whether you're preparing for a special occasion, in need of a little self-indulgence, or simply want to enhance your natural beauty, Salon Name is here to cater to your every need. Visit us today and let us take care of you from head to toe..</p>
                      <hr>     
            </div>
           
            <h1 style="color:white;"> STAFF</h1>
        </div>

       
        <?php

while($row=mysqli_fetch_assoc($all_staff)){

?>

        <div class="productc" style="text-align: center; float: left;width:100%;color:white;padding-top: 30px;">
	<div id="pimg" style="float: left;width:50%;"> <h3><?php   echo $row['ename'] ;   ?></h3>
		<img src="<?php   echo $row['Img_path'] ;   ?>" alt="" style="width:55%;"></div>
	<div id="pdescription" style="float: left;width: 50%;height: 100%; padding-top: 90px;font-size:20px;">
	<p><?php   echo $row['About'] ;   ?><br>Age:<?php   echo $row['Age'] ;   ?><br>Type:<?php   echo $row['Employee_type'] ;   ?>
	</p>
	<p></p>
    
</div>
    
    
  </div>
  <hr>
  <?php
    }




?>

<div class="footer-main">

<div id="footer">
  <div id="footer1">
 <h2 style="color: white;text-align: center;">About</h2> <br>
	 <ul type="none">
	 
 <li><a href="../../blog-log.html">Blogs</a></li><br>
 <li><a href="aboutus.php">About Salon</a></li><br>
 <li><a href="../../Terms-log.html">Privacy</a></li><br> 
 <li><a href="../../FAQ-log.html">FAQ</a></li><br>
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