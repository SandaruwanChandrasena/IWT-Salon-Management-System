<?php


    $id= isset($_GET['updatetid']) ? $_GET['updatetid']:"";
    





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration PageS</title>
    
    <!---Custom CSS File--->

    <link rel="stylesheet" href="../../styles/register.css" />

   
  </head>

  <body style="background-image: url('../../src/register.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
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
      <header>Update staff Members Details</header>
      <!--updateStaff Form-->
      <form  action="staffupdated.php" name="form1" method="post" class="form">
    
     <div class="input-box">
          <label>ID</label>
          <input type="text" name="id" value="<?php echo $id;?>"  readonly/>
        </div>
        
        
        <div class="input-box">
          <label>Employee Name</label>
          <input type="text" name="name" id="name"   />
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
          <input type="text" name="type" id="price"   />
        </div>
        <div class="input-box">
          <label>Age</label>
          <input type="text" name="age" id="price"   />
        </div>
        <div class="input-box">
          <label>Update image Path</label>
          <input type="text" name="img" id="img"   />
        </div>
    
 <button  name="submit">Update</a></button>


	
  
          
      
    
      </form>
    </section>
  </div>
  
  </body>
</html>
