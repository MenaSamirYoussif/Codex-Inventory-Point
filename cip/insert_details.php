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

    <title>Insert Items</title>
</head>

<body>
<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>

<?php
# posted data from create request module 
require('connection.php');
$request_id = $_GET['request_id'];
$request_by = $_GET['request_by'];
$location = $_GET['location'];
?>



<h3>Request Number   :<?php echo $request_id?>&nbsp;&nbsp;| Request By   : <?php echo $request_by?> &nbsp;&nbsp;| To Location    : <?php echo $location?> </h3> 


<?php



$request_id = $_GET['request_id'];
$item="" ;
$qty="";
$measure="";



if(isset($_POST["items"])){
    $item = $_POST["items"];
}

if(isset($_POST["qty"])){
    $qty = $_POST["qty"];
}

if(isset($_POST["measure"])){
    $measure = $_POST["measure"];
}





if(isset($_POST["save"])){

    mysqli_query($conn, "INSERT INTO request_details (request_id, item, qty, measure) 
    VALUES('$request_id','$item','$qty','$measure')");
    
    header("location:insert_details.php?request_id=$request_id&request_by=$request_by&location=$location");
    
}


?>


<?php
# dropdown menues query 

$list_items = mysqli_query($conn,"SELECT name FROM items");

 ?>

<div class="font_general">
<form   class ="form_body"  method="POST">
    <h3>Insert Items</h3>
    <hr>

    <label class="label">Item</label>
    <select name="items" id="items"> 
       <?php 

       while ($rows = $list_items->fetch_assoc())
       {
           $items = $rows['name'];
           echo "<option value='$items'>$items</option>";
         


       }
       
       ?></select>
       
       <br><br>

       <label class="label">Qty</label>
       <input class="" type="text" name="qty" id="qty">
       <br>

       <label class="label">Measure</label>
       <select class="select" name="measure" id="measure"><br>
                <option Value="" select>Measure Unit</option>
                <option Value="Kg">Kg</option>
                <option Value="Liter">Liter</option>
                <option Value="Meter">Meter</option>
                <option Value="Box">Box</option>
                <option Value="Unit">Unit</option>
                <option Value="Piece">Piece</option>
            </select> <br>

       <br>


    <button class="button" name="save" id="save">Save</button>

</form>

</div>

<br><hr>


<table class="content-table" >
        <thead class="t_head">
        <tr >
            <th>Request no</th>
            <th>Item</th>
            <th>Qty</th>
            <th>Measure</th>
        </tr>
        </thead>



        

        

        


<?php
require('connection.php');

$slc = mysqli_query($conn, "SELECT * FROM request_details WHERE request_id = $request_id ;");

       
           while  ($row = mysqli_fetch_array($slc)){

            echo "<tbody class='t_body'>";

               echo "<tr >";

               echo "<td>".$row['request_id']."</td>";

               echo "<td>".$row['item']."</td>";

               echo "<td>".$row['qty']."</td>";

               echo "<td>".$row['measure']."</td>";

             
               

               
             #echo "<td><a href='insert_items.php?request_id={$row['request_id']}&request_by={$row['user_id']}&location={$row['location_id']}'method='GET' target ='_blank'>"."Insert Items". "</td>";
              
              
               echo"</tr>";      

               echo "</tbody>";
         
           } 


?>

    
</body>
</html>



            