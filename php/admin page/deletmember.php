<?php


include 'connect.php';

if(isset($_GET['deletid'])){

    $id=$_GET['deletid'];

    $sql="DELETE FROM customers where CID =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully Deleted');
		window.location.href='adminmembers.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
}


?>
