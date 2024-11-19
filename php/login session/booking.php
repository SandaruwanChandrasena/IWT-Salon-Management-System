<?php


include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

$sql= "SELECT * FROM available_times;";
$all_times= $conn->query($sql);


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
   

    <title>Booking page</title>
    <script>
      function validateform(){
       var fn=document.getElementById('fname').value;
       var mail=document.getElementById('email').value;
       var pn=document.getElementById('phone').value;
       var st=document.getElementById('Stylist').value;
       var tm=document.getElementById('time').value;
       var s=document.getElementById('services').value;
       
        

       textcheck(fn,'fname');
       //textcheck(mail,'email');
       //textcheck(pn,'phone');
       //textcheck(st,'Stylist');
       //textcheck(tm,'time');
       //textcheck(s,'services');
       

      

   
      }

      function textcheck(text,id){

              if(text=="" || text==null){
                document.getElementById(id).style.borderColor="red";
              }else{
                document.getElementById(id).style.borderColor="green";
              }
            

            }




    </script>
    
    <!---Custom CSS File--->

    <link rel="stylesheet" href="../../styles/Booking.css" />
  </head>

  <body >

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
      <div id="formdiv" style="background-image: url('../../src/bookingback.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;width: 100%;height:100%;">
    <section class="container">
      <header>Make your Appointment</header>
      <form action="apointmentpay.php" class="form" method="post">
        <div class="input-box">
          <label>Your Name</label>
          <input type="text" id="fname" name="fname" placeholder="Enter full name" required />
        </div>

      

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" id="phone" name="phone" placeholder="Enter phone number" required />
          </div>
         
        </div>
        
      
        
        <div class="input-box address">
          <div class="column">
          <div class="input-box">
            <label>Date</label>
            <input type="date" id="phone" name="date" placeholder="Enter phone number" required />
          </div>
         
        </div>
        <div class="column">
            <div class="select-box">
              <select id="Services" name="service">
                <option hidden>Services</option>
                <option>Hair colour</option>
                <option>Hair cut</option>
                <option>Styling</option>
                <option>Treatments</option>
              </select>
            </div>

          </div>
        </div>
        <div class="column">
            <div class="select-box">
              <select id="Time" name="Time">
                <option hidden>Select Time</option>
                <?php

while($row=mysqli_fetch_assoc($all_times)){

?>
                <option><?php   echo $row['Times'] ;   ?></option>
                
                <?php
    }




?>
              </select>
            </div>
          
          
            <br><br><button name= "submit" onclick="validateform()">Confirm And Pay $20</button>
      </form>
    </section>
  </div>
  
  </body>
</html>