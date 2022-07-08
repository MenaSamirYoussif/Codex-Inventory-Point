<?php

    $server="localhost";
    $user="root";
    $pass="";
    $db="cip";
    $conn = mysqli_connect($server,$user,$pass,$db);
    
    if(!$conn)
    {
        die('Database Error'.mysqli_error());
    }


?>
