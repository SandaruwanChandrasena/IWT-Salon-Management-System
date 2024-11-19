<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];



$fnam= isset($_POST['fname']) ? $_POST['fname']:"";
$number=isset($_POST['phone']) ? $_POST['phone']:"0";
$day=isset($_POST['date']) ? $_POST['date']:"0";
$time= isset($_POST['Time']) ? $_POST['Time']:"";
$service= isset($_POST['service']) ? $_POST['service']:"";


$sql= "INSERT INTO appointment(CID,Name,Phone,Date,Time,Service) VALUES ('$user_id','$fnam','$number'
,'$day','$time','$service')";


if(mysqli_query($conn,$sql)){
  echo " <script>
  window.location.href='paymentpage.php';


   </script>";
}else{
  echo "error".$sql."<br>".mysqli_connect_error();
}

?>


