<!DOCTYPE html>
<html lang="en">
<head>

    
    
    <script src="jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
    $(document).ready(function(e){
        //variable
       
        
        //add line
        $(#add).click(function(e){
           
           $(#container).append("<p>Added</p>");
        });







    });
    </script>

    
    
    
    
   
</head>
<body>


<script>
<h2>JavaScript in Body</h2>

<p id="demo"></p>
document.getElementById("demo").innerHTML = "My First JavaScript";
</script>





    <form method="POST">
        <div id="container">
            Item:<input type="text" name="item">
            SKU:<input type="text" name="sku">
            Qty:<input type="text" name="qty">
            <a href='#' name="add" id='add'>Add Line</a>
        </div>
        <input type="SUBMIT" name="submit"/>


    </form>

</body>


</html>


