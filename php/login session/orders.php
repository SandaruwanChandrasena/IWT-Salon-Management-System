<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
};


$pnam= isset($_POST['name']) ? $_POST['name']:"";
$number=isset($_POST['quantity']) ? $_POST['quantity']:"0";
$price=isset($_POST['price']) ? $_POST['price']:"0";
$payment=($price*$number);



$sql= "INSERT INTO orders(CID,Poduct_name,Quantity,Price) VALUES ('$user_id','$pnam','$number'
,'$payment')";


if(mysqli_query($conn,$sql)){
  echo " <script>

  window.location.href='paymentpage.php';


   </script>";
}else{
  echo "error".$sql."<br>".mysqli_connect_error();
}

?>


