
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="s_tabs.css"> 
   


    <title>Show Items</title>

</head>
<body>

<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>



        <table class="content-table" >
        <thead class="t_head">
        <tr >
            <th>SKU</th>
            <th>Barcode</th>
            <th>Item Name</th>
            <th>Min Qty</th>
            <th>Max Qty</th>
            <th>Unit of Measure</th>
            
        </tr>
        </thead>

        


<?php
require('connection.php');

$slc = mysqli_query($conn, "SELECT * FROM items");

       
           while  ($row = mysqli_fetch_array($slc)){

            echo "<tbody class='t_body'>";

               echo "<tr >";
               echo "<td>".$row['sku']."</td>";

             
               echo "<td>".$row['bar_code']."</td>";

               
               echo "<td>".$row['name']."</td>";

               
               echo "<td>".$row['min']. "</td>";

               echo "<td>".$row['max']. "</td>";

               echo "<td>".$row['measure']. "</td>";


               #echo "<td><a href='rec.php?name={$row['name']}&sid={$row['sid']}'method='GET' target ='_blank'>"."Create Record". "</td>";
              # echo "<td><a href='view.php?name={$row['name']}&sid={$row['sid']}&sid={$row['sid']}' method='GET' target ='_blank'>"."View RecordS". "</td>";
              
               echo"</tr>";      

               echo "</tbody>";
         
           } 


?>
    
</body>
</html>





