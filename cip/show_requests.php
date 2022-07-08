
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="s_tabs.css"> 
   
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">


    <title>Show Requests</title>

</head>
<body>

<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>



        <table class="content-table" >
        <thead class="t_head">
        <tr >
            <th>Request ID</th>
            <th>Date</th>
            <th>BY</th>
            <th>Location</th>
            
            <th>Item</th>
            <th>Qty</th>
            <th>Fullfill</th>
            
        </tr>
        </thead>

        

        


<?php
require('connection.php');

$slc = mysqli_query($conn, "SELECT requests.request_id, requests.date, log.user, inventory_point.l_name, items.name, requests.qty 
FROM requests 
INNER JOIN log ON requests.user_id= log.user_id 
JOIN inventory_point ON requests.location_id = inventory_point.ip_id 
JOIN items ON requests.item_id = items.sku;  ");

       
           while  ($row = mysqli_fetch_array($slc)){

            echo "<tbody class='t_body'>";

               echo "<tr >";

               echo "<td>".$row['request_id']."</td>";

               echo "<td>".$row['date']."</td>";

               echo "<td>".$row['user']."</td>";

               echo "<td>".$row['l_name']."</td>";

             
               echo "<td>".$row['name']."</td>";

               

               echo "<td>".$row['qty']. "</td>";

               
              echo "<td><a href='insert_items.php?request_id={$row['request_id']}&request_by={$row['user']}'method='GET' target ='_blank'>"."Patch to Location". "</td>";
              #echo "<td><a href='insert_items.php?request_id={$row['request_id']}&sid={$row['sid']}'method='GET' target ='_blank'>"."Patch to Location". "</td>";
              #echo "<td><a href='view.php?name={$row['name']}&sid={$row['sid']}&sid={$row['sid']}' method='GET' target ='_blank'>"."View RecordS". "</td>";
              
               echo"</tr>";      

               echo "</tbody>";
         
           } 


?>
    
</body>
</html>





