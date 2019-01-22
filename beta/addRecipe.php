<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Recipes</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/totalrecipes.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
        <script src="lib/jquery/dist/jquery.js"></script>
        <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/jquery.jSlots.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <style type=”text/css”>

        </style>
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
    $sql = "SELECT meal, meal_id, dish, ingredient, calories, image FROM menu2";
    $result = mysqli_query($conn, $sql);
    $meals = array();

    class meal {

        public $meal;
        public $id;
        public $dish;
        public $ingredient;
        public $calories;
        public $image;

    }

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $meal = new meal();
            $meal->meal = $row['meal'];
            $meal->id = $row['meal_id'];
            $meal->dish = $row['dish'];
            $meal->ingredient = $row['ingredient'];
            $meal->calories = $row['calories'];
            $meal->image = $row['image'];
            array_push($meals, $meal);
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <body style="background-color:#ffc184">
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#featured">Lots of Dishes</a>
                    </div><!--navbar-header-->

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="totalRecipe.php">Recipes</a></li>
                        <li><a href="mealPlan.php">Meal Plan</a></li>
                        <li><a href="">Submission 1 Report</a></li>
                    </ul>
                </div><!--container-->
            </nav>
        </header>
        <div id="createRecipeModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" style="width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:200%">Create Recipe</h5>
                    </div>
                    <div class="modal-body" >
                        <div class="ingredient-item">
                            <label>Example select</label>
                            <select id="meal">
                                <option>breakfast</option>
                                <option>lunch</option>
                                <option>dinner</option>
                            </select>
                        </div>
                        <div class="ingredient-item" style="white-space:nowrap">
                            <label>Dish Name:</label>
                            <input id="dish" type="text" placeholder="French Toast"/>
                        </div>
                        <label>Add ingredient:</label>
                        <i id='addIngredient' class="material-icons" style="cursor:default; vertical-align: middle">add_circle_outline</i>
                        <div id="createContainer">
                        </div>
                        <div id="template" style="display: none;">
                            <div class="ingredient-item" style="white-space:nowrap">
                                <label>Ingredient:</label>
                                <input data-type="name" type="text" placeholder="Milk"/>
                                <label>Amount:</label>
                                <input data-type="amount" type="number" placeholder="50"/>
                                <label>Unit:</label>
                                <input data-type="unit" type="text" placeholder="ml"/>
                                <a class="remove-btn" href="javacript:viod(0)">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </div>
                        </div>
                        <div class="ingredient-item" style="white-space:nowrap">
                            <label>Calories:</label>
                            <input id="calories" type="text" placeholder="333">kcal</input>
                        </div>

                        <div>
                            <form id="uploadForm" enctype="multipart/form-data">
                                <label>Upload image:</label>
                                <input style="color: #fff;" type="file" id="file" name="image">
                            </form>

                        </div>
                        <div class="modal-footer">

                            <input type="button" class="btn btn-success" id="createConfirm" value="Create">
                        </div>


                    </div>
                </div>
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
                $(function () {
                    $('#addIngredient').click(function () {
                        var input = $('#createRecipeModal').find('#template .ingredient-item').clone();
                        $('#createRecipeModal').find('#createContainer').append(input);
                    });

                    $(document).on('click', '.remove-btn', function () {
                        $(this).parent('div .ingredient-item').remove();
                    });

                    $('#createConfirm').click(function () {
                        var ingredients = {};
                        $('#createRecipeModal').find('#createContainer .ingredient-item').each(function () {
                            var name = $(this).find('input[data-type=name]').val();
                            var amount = $(this).find('input[data-type=amount]').val();
                            var unit = $(this).find('input[data-type=unit]').val();
                            console.log(name);
                            ingredients[name] = {
                                "amount": amount,
                                "unit": unit
                            };
                        });
                        var meal = $('#createRecipeModal').find('#meal').val();
                        var dishName = $('#createRecipeModal').find('#dish').val();
                        var jsonStr = JSON.stringify(ingredients);
                        var calories = $('#createRecipeModal').find('#calories').val();
                        var imageName = $('#createRecipeModal').find('#file').val();
                        var n = imageName.lastIndexOf('\\');
                        var result = imageName.substring(n + 1);
                        var dataobject = {
                            meal: meal,
                            dishName: dishName,
                            ingredient: jsonStr,
                            calories: calories,
                            imageName: result
                        };
                        console.log(dataobject);
                        $.ajax({
                            method: 'POST',
                            url: 'insertDB.php',
                            dataType: 'json',
                            data: dataobject,
                            success: function (data) {
                                console.log('Response:');
                                $.ajax({
                                    url: 'upload.php',
                                    type: 'POST',
                                    cache: false,
                                    data: new FormData($('#uploadForm')[0]),
                                    processData: false,
                                    contentType: false,
                                    success: function (data) {
                                        //alert("Create Recipe Success!!!");
                                        window.location.href = 'totalRecipe.php';
                                    },
                                    error: function (xhr) {
                                        alert(xhr);
                                    }
                                });
                            },
                            error: function (xhr) {
                                alert(xhr);
                            }
                        });

                    });
                });
            </script>
    </body>
</html><?php



