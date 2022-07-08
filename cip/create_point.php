<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">
    <title>Create Inventory Point</title>
</head>

<body>
<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>



<?php


require('connection.php');

$ip_id="";
$name="";
$location="";
$type="";
$manager="";
$email="";
$tel="";


if(isset($_POST["ip_id"])){
    $ip_id = $_POST["ip_id"];
}

if(isset($_POST["name"])){
    $name = $_POST["name"];
}

if(isset($_POST["location"])){
    $location = $_POST["location"];
}

if(isset($_POST["type"])){
    $type= $_POST["type"];
}


if(isset($_POST["manager"])){
    $manager = $_POST["manager"];
}


if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["tel"])){
    $tel = $_POST["tel"];
}


if(isset($_POST["save"])){

    

    mysqli_query($conn, "INSERT INTO inventory_point(ip_id, name, location, type, manager, email, tel) 
    VALUES('$ip_id','$name','$location','$type','$manager','$email','$tel')");
    header('location: main.html');
    
}


?>










<div class="font_general">
<form   class ="form_body"  method="POST">
    <h3> Create Inventory Point</h3>
    <hr>

    <label class="label">Point ID</label>
    <input class="input_box" type="text" name="ip_id" id="ip_id"><br>



    <label class="label">Point Name</label>
    <input class="input_box" type="text" name="name" id="name"><br>



    <label class="label">Address</label>
    <input class="input_box" type="text" name="location" id="locatione"><br>

    <label class="label">Type</label>
    <select class="select" name="type" id="type"><br>
                <option Value="" select>Point Type</option>
                <option Value="Static Warehouse">Static Warehouse</option>
                <option Value="Goods in transit">Goods in transit</option>
                <option Value="Operation point">Operation point</option>
                
            </select> <br>


    

    <label class="label">Manager</label>
    <input class="input_box" type="text" name="manager" id="manager"><br>

    <label class="label">E-Mail</label>
    <input class ="input_box" type="email" name="email"><br>

    <label class="label">Tel</label>
    <input class ="input_box" type="text" name="tel"><br>

    



    <button class="button" name="save">Save</button>

</form>
</div>

    
</body>
</html>



            