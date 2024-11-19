
  
  <?php


include 'connect.php';
     

    $id=isset($_POST['id']) ? $_POST['id']:"";
    $name= isset($_POST['name']) ? $_POST['name']:"";
	$description= isset($_POST['des']) ? $_POST['des']:"";
	$type= isset($_POST['type']) ? $_POST['type']:"0";
    $age= isset($_POST['age']) ? $_POST['age']:"0";
    $path=isset($_POST['img']) ? $_POST['img']:"0";
    
	
	$sql= "UPDATE staff SET Employee_type='$type',About='$description',Age='$age',ename='$name',
    Img_path='$path'
    WHERE Employee_id ='$id';
    ";
	
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully Updated');
		window.location.href='editstaff.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	


?>




