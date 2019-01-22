<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>shopping list new</title>
        <link href="css/shoppinglistnew.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#includedContent").load("header.html");
            });
        </script>

    </head>
    <style type=”text/css”>
        .list {
            table-layout:fixed;
            border: 1px solid #000000;
            margin: 10px;
        }

    </style>
    <body>
        <div id="includedContent"></div>
        <!-- Main Container -->
        <div class="container"> 

            <section class="hero" id="hero">
                <h2 class="hero_header">Shopping <span class="light">List</span></h2>
                <p class="tagline">A WEEKLY SHOPPING LIST IF READY FOR YOU</p>
            </section>

            <!-- Stats Gallery Section -->
            <div>
          <!--    <p>Shopping LIst</p>-->
                <div>
                    <table class='list'>
                        <?php
                        $ingredientList = explode(",", filter_input(INPUT_POST, 'finalIngredient'));
                        foreach (array_chunk($ingredientList, 5) as $ingredientList) {
                            echo "<tr><td>" . implode("</td> <td>", $ingredientList) . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <div>

                    <div align="right" style="margin-bottom:-20px">
                        <a href="mealPlan.php">
                            <button type="button" class="btn btn-warning" style=" margin: 25px; height:40px">< Back to meal plan</button>
                        </a>
                    </div>
                </div>


            </div>
            <!-- About Section -->
            <section class="about" id="about" style="background-color:#A5A3A3">
                <h2 style="color:white">This is the amount of food you need to buy in a week.</h2>
                <p class="text_column" style="font-family: Helvetica;">According to the shopping list, you can buy all the materials you need in a week.<br>PS: The categroy that does not have unit shows the number of this kind of material.   </p>
            </section>
        </div>
        <!-- Main Container Ends -->
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

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


</html>
