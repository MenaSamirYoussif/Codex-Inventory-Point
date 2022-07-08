<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">
    <title>Create Item</title>
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

    

    mysqli_query($conn, "INSERT INTO requests (date, user_id, location_id, item_id, qty) 
    VALUES('$date','$by','$department','$item','$qty')");
    header('location: ');
    
}


?>










<div class="font_general">
<form   class ="form_body"  method="POST">
    <h3>Request Header</h3>
    <hr>

    <label class="label">Request Date</label>
    <input class ="date" type="date" name="date"><br>

    <label class="label">Request By</label>
    <input class="input_box" type="text" name="by" id="by"><br>



    <label class="label">Department</label>
    <input class="input_box" type="text" name="department" id="department"><br>



    <label class="label">Item</label>
    <input class="input_box" type="text" name="item" id="item"><br>


    <label class="label">Qty</label>
    <input class="input_box" type="text" name="qty" id="qty"><br>

    

    

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



    <button class="button" name="save">Save</button>

</form>
</div>

    
</body>
</html>



            