<?php


include 'connect.php';

if(isset($_GET['deletid'])){

    $id=$_GET['deletid'];

    $sql="DELETE FROM product where product_id =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully Deleted');
		window.location.href='admin page.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
}


?>
