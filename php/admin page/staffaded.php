<?php


include 'connect.php';

    $name= isset($_POST['name']) ? $_POST['name']:"";
	$description= isset($_POST['des']) ? $_POST['des']:"";
	$age= isset($_POST['age']) ? $_POST['age']:"0";
    $path=isset($_POST['img']) ? $_POST['img']:"0";
    $type= isset($_POST['type']) ? $_POST['type']:"0";
    
	
	$sql= "INSERT INTO staff(Employee_type,About,Age,ename,Img_path) VALUES ('$type','$description','$age'
	,'$name','$path')";
	
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully added');
		window.location.href='editstaff.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	


?>