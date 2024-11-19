
  
  <?php


include 'connect.php';
     

    $id=isset($_POST['id']) ? $_POST['id']:"";
    $name= isset($_POST['name']) ? $_POST['name']:"";
	$description= isset($_POST['des']) ? $_POST['des']:"";
	$price= isset($_POST['price']) ? $_POST['price']:"0";
    $path=isset($_POST['img']) ? $_POST['img']:"0";
    
	
	$sql= "UPDATE product SET product_name='$name',price='$price',description='$description',img_path='$path'
    WHERE product_id='$id';
    ";
	
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully Updated');
		window.location.href='admin page.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	


?>




