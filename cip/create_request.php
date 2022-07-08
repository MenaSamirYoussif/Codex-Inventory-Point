<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="s_tabs.css"> 
   
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">

    <title>Requests</title>
</head>

<body>
<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>



<?php


require('connection.php');

$date="";
$by="";
$department="";
$item="" ;
$qty="";




if(isset($_POST["date"])){
    $date = $_POST["date"];
}

if(isset($_POST["by"])){
    $by = $_POST["by"];
}

if(isset($_POST["department"])){
    $department = $_POST["department"];
}


if(isset($_POST["item"])){
    $item = $_POST["item"] ;
}


if(isset($_POST["qty"])){
    $qty = $_POST["qty"];
}

if(isset($_POST["measure"])){
    $measure = $_POST["measure"];
}


if(isset($_POST["save"])){

    

    mysqli_query($conn, "INSERT INTO request_header (date, user_id, location_id) 
    VALUES('$date','$by','$department')");
    header('location:create_request.php ');
    
}


?>








<?php
# dropdown menues query 

$list = mysqli_query($conn,"SELECT user FROM log");
$list_location = mysqli_query($conn,"SELECT l_name FROM inventory_point");


 ?>



<div class="font_general">
<form   class ="form_body"  method="POST">
    <h3>Request Header</h3>
    <hr>
    

    <label class="label">Fullfill Date</label>
    <input class ="date" type="date" name="date"><br>

    <label class="label">Request By</label>
    <select name="by"> 
       <?php 

       while ($rows = $list->fetch_assoc())
       {
           $users = $rows['user'];
           echo "<option value='$users'>$users</option>";
         


       }
       
       ?></select><br>

       

<label class="label">Location</label>
    <select name="department"> 
       <?php 

       while ($rows = $list_location->fetch_assoc())
       {
           $locations = $rows['l_name'];
           echo "<option value='$locations'>$locations</option>";


       }
       
       ?></select>
       <br>


    <button class="button" name="save">Save</button>

</form>

</div>

<br><hr>


<table class="content-table" >
        <thead class="t_head">
        <tr >
            <th>Request no</th>
            <th>Date</th>
            <th>BY</th>
            <th>Location</th>
            <th>Fullfill</th>
            
        </tr>
        </thead>



        

        

        


<?php
require('connection.php');

$slc = mysqli_query($conn, "SELECT * FROM request_header;");

       
           while  ($row = mysqli_fetch_array($slc)){

            echo "<tbody class='t_body'>";

               echo "<tr >";

               echo "<td>".$row['request_id']."</td>";

               echo "<td>".$row['date']."</td>";

               echo "<td>".$row['user_id']."</td>";

               echo "<td>".$row['location_id']."</td>";

             
               

               
              echo "<td><a href='insert_details.php?request_id={$row['request_id']}&request_by={$row['user_id']}&location={$row['location_id']}'method='GET' target ='_blank'>"."Insert Details". "</td>";
              
              
               echo"</tr>";      

               echo "</tbody>";
         
           } 


?>

    
</body>
</html>



            