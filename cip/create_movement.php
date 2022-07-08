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

$sku="";
$barcode="";
$name="";
$min="" ;
$max="";
$measure="";



if(isset($_POST["sku"])){
    $sku = $_POST["sku"];
}

if(isset($_POST["barcode"])){
    $barcode = $_POST["barcode"];
}

if(isset($_POST["name"])){
    $name = $_POST["name"];
}


if(isset($_POST["min"])){
    $min = $_POST["min"] ;
}


if(isset($_POST["max"])){
    $max = $_POST["max"];
}

if(isset($_POST["measure"])){
    $measure = $_POST["measure"];
}


if(isset($_POST["save"])){

    

    mysqli_query($conn, "INSERT INTO items(sku, bar_code, name, min, max, measure) 
    VALUES('$sku','$barcode','$name','$min = $min','$max','$measure')");
    header('location: ');
    
}


?>










<div class="font_general">
<form   class ="form_body"  method="POST">
    <h3> Create Inventory Item</h3>
    <hr>

    <label class="label">SKU</label>
    <input class="input_box" type="text" name="sku" id="sku"><br>



    <label class="label">Barcode</label>
    <input class="input_box" type="text" name="barcode" id="barcode"><br>



    <label class="label">Item Name</label>
    <input class="input_box" type="text" name="name" id="name"><br>


    <label class="label">Min Qty</label>
    <input class="input_box" type="text" name="min" id="min"><br>

    <label class="label">Max Qty</label>
    <input class="input_box" type="text" name="max" id="max"><br>

    <label class="label">Expiry</label>
    <input class ="date" type="date" name="expiry"><br>

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



            