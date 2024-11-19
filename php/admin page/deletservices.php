<?php


include 'connect.php';

if(isset($_GET['deletid'])){

    $id=$_GET['deletid'];

    $sql="DELETE FROM services where service_id  =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"
        <script>
        alert ('Successfully Deleted');
		window.location.href='serviceedit.php';

       

        </script>
        
        
        
        ";
    }else{
        echo"st na";

    }
}


?>
