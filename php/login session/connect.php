<?php
    $conn=mysqli_connect("localhost" , "root" , "", "saloon");

    if(!$conn)
   
    {
        mysqli_connect_error($conn);
    }
?>