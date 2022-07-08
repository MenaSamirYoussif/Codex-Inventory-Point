<?php


require_once ('connection.php');

#include ("functions.php");
#$user_data = check_login($conn);


    


    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
    

    $sql = "SELECT * FROM log WHERE user='".$username."' AND pass='".$password."' limit 1" ;
    $result = mysqli_query($conn, $sql);
    #$row = mysqli_fetch_all($result);
    #print_r($row);



    if(mysqli_num_rows($result)==1)
    {
        header('location:main.html');
        exit();
    }

    else
     {
        header('location:log.php?Empty= Please fill access data');
         echo "Wrong Access";
         exit();

    }




}


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>
    <link rel="stylesheet" type="text/css" href="stylus.css"> 
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

</head>
<body>
<img class="logo" src = grf/cip.png width="200">

<div class="col d-flex justify-content-center">
<div class="log_form">
<form method="POST" action="#">
<input class="input_box" type="text" name="username" placeholder="Enter User Name" require /> <br>
<input class="input_box" type="password" name="password" placeholder="Enter Password"/> <br>
<input class="button" type="submit" name="submit" value="Log in" /> <br>
</form>
    
</body>
</html>
<html>


