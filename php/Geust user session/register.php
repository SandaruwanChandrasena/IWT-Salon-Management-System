<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <title>Registration PageS</title>
    
    

    <link rel="stylesheet" href="../../styles/register.css" />

    <script>
      function validateform(){
       var fn=document.getElementById('fname').value;
       var email=document.getElementById('email').value;
       var pn=document.getElementById('phone').value;
       var address=document.getElementById('add').value;
       
       var pw=document.getElementById('ipw').value;
       var cpw=document.getElementById('icpw').value;
        

       textcheck(fn,'fname');
       textcheck(email,'email');
       textcheck(pn,'phone');
       textcheck(address,'add');
      
       

       if(pw==cpw && cpw!="" && pw!=""){
        document.getElementById('ipw').style.borderColor="green";
        document.getElementById('icpw').style.borderColor="green";
       }else{
        document.getElementById('icpw').style.borderColor="red";
        document.getElementById('ipw').style.borderColor="red";
        alert("Passwords missmatched or empty");
        window.location.href='register.php';
       }


   
      }

      function textcheck(text,id){

              if(text=="" || text==null){
                document.getElementById(id).style.borderColor="red";
              }else{
                document.getElementById(id).style.borderColor="green";
              }
            

            }




    </script>
  </head>

  <body style="background-image: url('../../src/register.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <nav class="nav">
      <div id="divn"><img src="../../src/logo.png"></div>
      <div class="nav1">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index-service.php">Services</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="productindex.php">Shop</a></li>
        <li><a href="../..//blog.html">Blog</a></li>
        <li><a href="../../contactUs.html">Contactus</a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
      
       
      </ul>
      </div>
      
      
      </nav>
<div id="maindiv">
    <section class="container">
      <header>Registration Form</header>
      <form action="regiter.php" name="form1" method="post" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="fname" id="fname" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" id="email" name="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number"  name="phone" id="phone" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="bd" id="bd" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" name="gender" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" name="gender" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="add" id="add" placeholder="Enter the address" required />
         
          
        </div>
        <div class="input-box address">
          <label>Password</label>
          <input type="text"  name="pw" id="ipw" placeholder="Enter the Password" required />
          <div class="column">
            
            <input type="text" id="icpw" placeholder="Re-Enter the Password" required />
          </div>
          
        </div><br>
        <h5>Already Have a Account?<a href="login.php">Login</a></h5>
        <button onclick="validateform()" name="submit">Submit</button>
      </form>
    </section>
  </div>
 
  </body>
</html>