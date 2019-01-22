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
        <link rel="stylesheet" href="css/jquery.ScrollTotop.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
        <script src="lib/jquery/dist/jquery.js"></script>
        <script src="js/jquery.backTotop.js"></script>
        <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/jquery.jSlots.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script>
            $(function () {
                $("#includedContent").load("header.html");
                $("#includeRecipe").load("result.php");
            });
        </script>
        <style>
            #search{
                background-image:url(images/search.png); 
                background-repeat: no-repeat; 
                background-size: 20px 20px;
                background-position: center;
            }
            #searchform{
                margin: 25px;
                width: 200px;
                height:10px;
                position: absolute;
                right: 10px;
            }

        </style>
    </head>

    <body>
        <div id="includedContent"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div align="left" style="margin-bottom:-20px">
                        <a href="addRecipe.php">
                            <button type="button" class="btn btn-warning" style=" margin: 25px; height:40px; "><i class="material-icons">create_new_folder</i>Create your own recipe</button>
<!--                                <input style=" background-color: #F93;  color: white; margin: 20px 2px; font-size: 20px; border-radius: 6px;"type="button" value="Add your own recipe" />-->
                     
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div  class="input-group add-on" id="searchform">
                        <input type="text" id="recipe_query" class="form-control"/>
                        <div class="input-group-btn">
                            <input type="button" id="search" class="btn btn-default" style="width: 40px;"></input>     
                        </div>
                    </div>
                </div>


                <div id="includeRecipe"class="col-md-12"></div>

            </div>

        </div>
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>


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
            $('#search').click(function () {
                console.log($('#recipe_query').val());
                var value = $('#recipe_query').val();
                console.log(value);
                ajaxRequest = $.ajax({
                    url: "result.php",
                    type: "post",
                    data: {data: value},
                    success: function (data) {
                        $("#includeRecipe").html(data);
                        console.log(data);
                    }
                });
            });
            $(function () {
                if ($('#back-to-top').length) {
                    var scrollTrigger = 100, // px
                            backToTop = function () {
                                var scrollTop = $(window).scrollTop();
                                if (scrollTop > scrollTrigger) {
                                    $('#back-to-top').addClass('show');
                                } else {
                                    $('#back-to-top').removeClass('show');
                                }
                            };
                    backToTop();
                    $(window).on('scroll', function () {
                        backToTop();
                    });
                    $('#back-to-top').on('click', function (e) {
                        e.preventDefault();
                        $('html,body').animate({
                            scrollTop: 0
                        }, 700);
                    });
                }
            });
        </script>
    </body>
</html>