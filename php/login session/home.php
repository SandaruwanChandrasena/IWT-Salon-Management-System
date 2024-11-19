<?php


include 'connect.php';

session_start();
$user_id = $_SESSION['user_id'];



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>project</title>
	<link rel="stylesheet" type="text/css" href="../../styles/homestyle.css">
	<script defer src="shome.js"></script>
</head>

<body  >
	
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
		
	<div class="container">
		<div id="toptext">NATURAL BEAULTY  SALON<br></div>
		
			
		</div>
	</div>

<div id="about" >
 <div id="aimg"><img src="../../src/about-left.jpg" align="center"></div>
	<div id="apara" ><h2>Who We Are</h2>
		<h1>QUALITY & NATURAL BEAUTY SALON</h1>
		<p>Sed ut persiciatis unde omnis iste natus error sit voluptate maccusantium 
	doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore
	 veritatis et quasi architecto beatae vitae dicta sunt explic aboemo enim ipsa</p>
		<ul><li>Natural Beauty Salon</li>
		<li>Professional Women Spa Service</li>
		<li>PExperience Hair Treatments</li>
		</ul>
		<div id="div1"></div><div id="div2"><button class="bt2" onclick="location.href='aboutus.php'"><span>Reed more</span></button></div>
	</div>

</div>
	<div id="services">
		<div id="shead"></div>
		<div id="sdetails">
		<div id="s1"></div>
		<a href="service.php"><div id="s2" ><img src="../../src/s1.jpg" width="100%" height="80%">Girls Face Beauty Treatments</div></a>
		<div id="s3"></div>
		<a href="service.php"><div id="s2" ><img src="../../src/s2.jpg" width="100%" height="80%">Girls Hair Treatments</div></a>
		<div id="s3"></div>
		<a href="service.php"><div id="s2" ><img src="../../src/s3.jpg" width="100%" height="80%">Girls Nail Treatments</div></a>
		<div id="s3"></div>
		<a href="service.php"><div id="s2" ><img src="../../src/s4.jpg" width="100%" height="80%">Boys Hair Styles</div></a>
		<div id="s1"></div>
		<div id="div3"></div><div id="div4"><button class="bt2" onclick="location.href='service.php'"><span>View more</span></button></div>
		</div>
		
	</div>
<div id="deco">
	<h3>Popular Product</h3>
    <h2>VISIT OUR SHOP TO COLLECT BEAUTY PRODUCTS</h2>	
	<div id="pdetails">
    <div id="p1"></div>
        <a href="product.php"><div id="p2"><img src="../../src/p1.jpg" width="100%" height="80%">Organic Hair Oil <br>Price $253.59</div></a>
		<div id="p1"></div>
        <a href="product.php"><div id="p2"><img src="../../src/p2.jpg" width="100%" height="80%">Organic Hair Oil <br>Price $253.59</div></a>
		<div id="p1"></div>
		<a href="product.php"><div id="p2"><img src="../../src/p3.jpg" width="100%" height="80%">Natural Hair Colors Price $253.59</div></a>
		<div id="p1"></div>
		<div id="div3"></div><div id="div4"><button class="bt2"  onclick="location.href='product.php'"><span>Visit our shop</span></button></div>
		</div>
	</div>
	<div id="adress">
     <div id="opent">
		<div id="back"></div>
		<div id="details">
			<h2>Working Hours</h2>
			<h3> Our salon operates during regular business hours, ensuring that you can conveniently schedule your appointments and enjoy our services at your preferred time.</h3>
			
		<span><img src="../../src/time.png" width="5%">	Mon to Fri: 7:30 am — 1:00 am<br>
			Sat: 9:00 am — 1:00 am<br>
			Sun: 9:00 am — 11:30 pm</span><br>
			<div id="div3"></div><div id="div4"><br><button class="bt2"  onclick="location.href='booking.php'"><span>Appointment</span></button></div>
		</div>
	
	
	</div>
	 <div id="location">
		<div id="back2" ></div>
		<div id="details"><h2>Contact us</h2>
			<h3> We're here to assist you in any way we can. Whether you have a question about our services, want to book an appointment, or need more information about our products, our dedicated team is ready to help.</h3>
			
		<span><img src="../../src/location.png" width="5%">
			Location<br>
			523 Main Street, 2nd Floor, New York City<br><br>
			
			Hotline<br>
			Call : +012 (345) 6789</span></div></div>
	 </div>
	 
	
	</div>

		<div id="blog"><h3>blog</h3>
		<h2>LATEST NEWS & BLOG</h2>
		<div id="bdetails">
			<div id="b1" ></div>
			<div id="b2" ><a href="../../blog-log.html"><img src="../../src/blog1.jpg" width="100%" height="60%"></a><h2>Smase Podcast Episode Chris Ferdinande</h2>Unlocking the Secrets of Healthy and Lustrous Hair</div>
			<div id="b1"></div>
			<div id="b2" ><a href="../../blog-log.html"><img src="../../src/blog2.jpg" width="100%" height="60%"></a><h2>Useful React Hooks That You Can Projects</h2>The Science Behind Effective Skincare: Ingredients to Look For</div>
			<div id="b1"></div>
			<div id="b2" ><a href="../../blog-log.html"><img src="../../src/blog3.jpg" width="100%" height="60%"></a><h2>Smase Podcast Episode Chris Ferdinande</h2>The Latest Makeup Trends: Fresh Looks for Every Occasion</div>
			<div id="b1"></div>
			
			</div>

		
		</div>


		
		<div class="footer-main">

  <div id="footer">
    <div id="footer1">
   <h2 style="color: white;text-align: center;">About</h2> <br>
       <ul type="none">
       
   <li><a href="../../blog-log.html">Blogs</a></li><br>
   <li><a href="aboutus.php">About Salon</a></li><br>
   <li><a href="../../Terms-log.html">Privacy</a></li><br>
   <li><a href="../../FAQ-log.html">FAQ</a></li>
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
  <a href=""><img src="../src/facebook.png" width="10%"></a><br><br>
  <a href=""><img src="../src/instagram.png" width="10%"></a><br><br>
  <a href=""><img src="../src/twitter.png" width="10%"></a>
</div>
      <hr>
 <h4>© 2022 IWT Team-5, All Rights Reserved

 </h4>

</div>

</div>
</body>
</html>
