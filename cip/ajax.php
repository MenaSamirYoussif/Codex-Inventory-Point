<?php
require('connection.php');

$sqldata = array();
if(!empty($_GET['user'])){
    $name = strtolower(trim($_GET['user']));
   # $sqln = "SELECT name FROM items WHERE lower(name) LIKE 'script'";
    $sqldata = mysqli_query($conn,"SELECT user FROM log");

    

      

    while ($row = mysqli_fetch_assoc($sqldata) ){
        array_push($sqldata, $row['user']);

    }
}


$sqldata = mysqli_query($conn,"SELECT user FROM log");

echo print_r($row);  


#mysqli_fetch_assoc($sqldata); 
#echo json_encode($sqldata);exit;


?>