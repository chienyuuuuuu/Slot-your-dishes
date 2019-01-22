<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/recipe.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function(){
                $("#includedContent").load("header.html");
            });
        </script>


    </head>
    <?php
    $servername = "playground.eca.ed.ac.uk";
    $username = "s1771650";
    $password = "arveU3YeDA";
    $dbname = "s1771650";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $meal = $_GET['meal'];
    $dishName = $_GET['name'];

    $sql = "SELECT ingredient, calories, image FROM menu2 WHERE meal='{$meal}' AND dish='{$dishName}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    //echo $row['ingredient'] . '<br>';
    //$keys = array_keys($ingredients);
    //echo gettype($row['ingredient']);

    ?>
    <body>
        <div id="includedContent"></div>

        <div class="container" >
            <div class="col-md-8 col-md-offset-2">
                <h2><?php echo $dishName ?></h2>
                <img src=<?php echo $row['image'] ?> width=100%>
            </div>
        </div>

        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h2>Ingredients</h2>
            </div>
            
                <script type="text/javascript" charset="utf-8">
                    $(function(){
                        var ingredientString = <?php echo $row['ingredient'] ?>
                        //var ingredients = $.parseJSON(ingredientString);
                        console.log(ingredientString);
                        $.each(ingredientString, function(key,value){
                            var a = key;
                            var b = value['amount']+value['unit'];
                            console.log(a);
                            $('#ingredient').append(a+'<br>');
                            $('#unit').append(b+'<br>');
                        });
                    });
                    
                </script>
            <div class="col-md-4 col-md-offset-2">    
                <p id ='ingredient'></p>
            </div>
            <div class="col-md-4" align=left>
                <p id='unit'></p>
            </div>
        </div>

        <div class="container" >
            <div class="col-md-8 col-md-offset-2">
                <h2>How to do it?</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/67424331" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <p><a href="https://vimeo.com/67424331">Coconut Pancake Recipe</a> from <a href="https://vimeo.com/leaftv">LEAFtv</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
        
        <div class="container" align="right" style="padding:10px">
            <a href="totalRecipe.php">
            <input type="button" class="btn btn-warning" value="< Back to total Recipe">
            </a>
            <input type="button" class="btn btn-danger" id="deleteRecipe" value="Delete Recipe">
        </div>


        <footer>
            <div class="content container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Call us toll-free at <span class="phone">888-555-1112</span></p>
                        <p>All contents &copy; 2018 <a href="#">Lots of Dishes</a>. All rights reserved.</p>    
                    </div><!--col-sm-6-->
                    <div class="col-sm-6">
                        <nav class="navbar navbar-default" role="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </nav>
                    </div><!--col-sm-6-->
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var meal = '<?php echo $meal ?>' ;
            console.log(meal);
            var dishName = '<?php echo $dishName ?>' ;
            console.log(dishName);
            $(function () {
                $('#deleteRecipe').click(function () {
                     var dataobject = {
                        meal: meal,
                        dishName: dishName
                    };
                    $.ajax({
                        method: 'POST',
                        url: 'deleteDB.php',
                        dataType: 'json',
                        data: dataobject,
                        success:function(data){
                            console.log('Response:');
                            alert("Delete Recipe Success!");
                            window.location.href = 'totalRecipe.php'; 
			}
                    });
                    
                    
                });
            
            });
        </script>

    </body>
</html>