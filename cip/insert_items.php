
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css"> 
    <link rel="stylesheet" href="s_tabs.css">

    
    <title>Insert Item</title>
</head>
<a href="main.html" > <img class="logo" src = grf/cip.png width="200"> </a>
<hr>

<?php
require('connection.php');
$request_id = $_GET['request_id'];
$request_by = $_GET['request_by'];
$location = $_GET['location'];
?>



<h3>Request Number   :<?php echo $request_id?>| Request By   : <?php echo $request_by?> | To Location    : <?php echo $location?> </h3> 







<form action="" method="post" enctype="">

                        <fieldset>
                            <legend>Add Items</legend>



                            <div id="dynamic_field">
                                
                                <div class="">
                                        <td><button type="button" name="add" id="add" class="button">Add Item<i class=""></i></button></td>
                               </div>

                               <div class="inline_input" >
                                 
                                    <div class="">
                                        <input type="text" class="form-control" name="item_name[]" placeholder="Item Name">
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control" name="qty[]" placeholder="Qty">
                                    </div>
                                    
                                   
                                    <div class="">
                                        <input type="text" class="form-control" name="measure[]" placeholder="Measure">
                                    </div>
                                    <button type="button" name="remove" class="button_line btn_remove" id="' + i + '"><i class="???"></i>Remove</button>
                                    <button type="submit" name="submit" class="" >Submit</button>

                                    
                                </div>
                            </div>


                            <br>
                            
                </div>
                
        </div>

        


        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                var i = 1;
                var html = '<div class="inline_input" id="row' + i + '"> \
                <label class="label">Request By</label><select name="by"> \
                <?= while ($rows = $list->fetch_assoc()){$users = $rows['user'];echo "<option value='$users'>$users</option>";}?></select>\





                    <div class="col"> <input type="text" class="form-control" name="qty[]"></div> \
                    <div class="col"> <input type="text" class="form-control" name="measure[]"> </div>\
                    <div class="col"> <td><button type="button" name="remove" class="button_line btn_remove" id="' + i + '">\
                    <i class="???"></i>Remove</button></td> </div> </div>'
              
                $('#add').click(function () {
                    i++;
                    $('#dynamic_field').append(html);

                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });
            



            });
        </script>


        <?php  

if (isset($_POST['submit'])) {

    $request_id = $request_id;
    
    $item_name = $_POST['item_name'];
    $qty = $_POST['qty'];
    $measure = $_POST['measure'];
    

   #$query = "INSERT INTO request_details (request_id,item,qty,measure) VALUES ('$request_id','$item_name',' $qty','$measure')";

    #$result = mysqli_query($conn, $query);
    #$student_id = $conn->insert_id;


    foreach ($_POST['item_name'] as $key => $value) {

        $query1 = "INSERT INTO request_details(request_id,item,qty,measure)VALUES ('" . $request_id . "','" . $_POST['item_name'][$key] . "','" . $_POST['qty'][$key] . "','" . $_POST['measure'][$key] . "')";
       mysqli_query($conn, $query1);
    }
    
    
}
        
        
        ?>

    </body>
</html>