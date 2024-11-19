<?php


include 'connect.php';

    $time= isset($_POST['time']) ? $_POST['time']:"";
    
	
	$sql= "INSERT INTO available_times(Times) VALUES ('$time')";
	
	if(mysqli_query($conn,$sql)){
		echo " <script>

		alert ('Successfully added');
		window.location.href='adminapintment.php';



	   </script>";
	}else{
		echo "error".$sql."<br>".mysqli_connect_error();
	}
	


?>