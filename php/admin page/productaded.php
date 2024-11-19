<?php


include 'connect.php';

    $name= isset($_POST['name']) ? $_POST['name']:"";
	$description= isset($_POST['des']) ? $_POST['des']:"";
	$price= isset($_POST['price']) ? $_POST['price']:"0";
    $path=isset($_POST['img']) ? $_POST['img']:"0";
    
	
	$sql= "INSERT INTO product(product_name,price,description,img_path) VALUES ('$name','$price','$description'
	,'$path')";
	
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully added');
		window.location.href='admin page.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	


?>