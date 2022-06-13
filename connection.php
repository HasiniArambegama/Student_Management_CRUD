<?php

    $con=new mysqli('localhost', 'root', '', 'university');

    if($con){
        echo "Connection successfully";
    }else{
        die(mysqli_error($con));
    }
?>