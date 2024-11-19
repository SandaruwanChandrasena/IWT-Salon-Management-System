<?php
	include'connect.php';
	session_start();

	
	if(isset($_POST['submit']))
	{
		$email= isset($_POST['email']) ? $_POST['email']:"";
		$password= isset($_POST['pw']) ? $_POST['pw']:"";
		
		 
		$sql="SELECT * FROM customer WHERE email='$email'  AND pass='$password'";		
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['user_id'] = $row['CID'];
			header('location:useraccount.php');
		 }
		else
		{
			
			
			echo '<script type="text/JavaScript"> 
    		 		alert("Invalid Username , Email or Password Try agin!");
             window.location.href="login.php";
     				</script>';
		}
			
		
		
	}
	
	
?>	