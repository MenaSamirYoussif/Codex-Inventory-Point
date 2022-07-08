<?php

session_start();

#   $user_data = check_login($conn);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="stylus.css"> 
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body>
<h1>Main Page</h1>

 


  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Users</a></li>
    <li><a data-toggle="tab" href="#menu2">Entity</a></li>
    <li><a data-toggle="tab" href="#menu3">Inventory</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Home Tabe with brach</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Users</h3>
      <p>Users tab</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Entity</h3>
      <p> Entity data</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Inventory point</h3>
      <p>warehouse data</p>
    </div>
  </div>
</div>


<div class ="formA">

<ul>
<li><a href="LOGOUT.php"> Log Out</a></li>
<li><a href="LOGOUT.php"> Create Entity</a></li>
<li><a href="LOGOUT.php"> Create Inventory Point</a></li>
<li><a href="LOGOUT.php"> Create Item</a></li>
<li><a href="LOGOUT.php"> Create User</a></li>
</ul>

</div>


    
</body>
</html>