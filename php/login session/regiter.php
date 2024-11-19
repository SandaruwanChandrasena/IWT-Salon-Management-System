
<?php

     include 'connect.php';


	$fnam= isset($_POST['fname']) ? $_POST['fname']:"";
	$email= isset($_POST['email']) ? $_POST['email']:"";
	$number= isset($_POST['phone']) ? $_POST['phone']:"0";
    $birthday=isset($_POST['bd']) ? $_POST['bd']:"0";
    $gender=isset($_POST['gender']) ? $_POST['gender']:"0";
	$passw= isset($_POST['pw']) ? $_POST['pw']:"";
    $addres= isset($_POST['add']) ? $_POST['add']:"";
	
	$sql= "INSERT INTO customer(Full_name,email,phone,birthdate,gender,pass,address) VALUES ('$fnam','$email','$number'
	,'$birthday','$gender','$passw','$addres')";


$select = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email' AND pass = '$passw'") or die('query failed');



if(mysqli_num_rows($select) > 0){
	echo " <script>

		alert ('user already exist!');
		window.location.href='register.php';



	   </script>";
	}else{
	
  
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully Registered');
		window.location.href='login.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	
}

?>
