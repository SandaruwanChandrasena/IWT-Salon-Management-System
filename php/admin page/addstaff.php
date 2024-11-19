




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title>Registration PageS</title>
    
   

    <link rel="stylesheet" href="../../styles/register.css" />

   
  </head>

  <body style="background-image: url('../../register/register.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
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
<div id="maindiv">
    <section class="container">
      <header>ADD Staff Members</header>
      
      <!--addstaff form-->
      <form action="staffaded.php" name="form1" method="post" class="form">
        <div class="input-box">
          <label> Name</label>
          <input type="text" name="name" id="name"  required />
        </div>

        <div class="input-box">
          <label>About</label><br>
          <textarea  name="des" style="width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  resize: none;"></textarea>
        </div>
        <div class="input-box">
          <label>Type</label>
          <input type="text" name="type" id="type"  required />
        </div>
        <div class="input-box">
          <label>Age</label>
          <input type="text" name="age" id="age"  required />
        </div>
        <div class="input-box">
          <label> image Path</label>
          <input type="text" name="img" id="img"  required />
        </div>
        
          
        <button  name="submit">ADD</button>
      </form>
    </section>
  </div>
  