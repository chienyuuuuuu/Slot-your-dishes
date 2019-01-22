<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lots of Dishes</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/lotsofdishes.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />

        <script src="lib/jquery/dist/jquery.js"></script>
        <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/jquery.jSlots.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script>
            $(function () {
                $("#includedContent").load("header.html");
            });
        </script>
        <style type="text/css">
            ul {
                padding: 0;
                margin: 0;
                list-style: none;
            }

            .jSlots-wrapper {
                overflow: hidden;
                height: 180px;
                width: 300px;
                display: inline-block; /* to size correctly, can use float too, or width*/
                border: 1px solid #999;
            }

            .slot {
                float: left;
            }
            .btn{
                width: 262.51px;
            }
            #information{
                margin-left:5%; 
            }


        </style>
    </head>
    <body>
        <div id="includedContent"></div>
        <div id='main'>
            <!--background-->

            <!--删除
            <div class="content container">
                <h1>Weekly Dishes</h1>
            </div>-->

            <!--//background-->
            <div id="breakfast-container"></div>
            <div id="lunch-container"></div>
            <div id="dinner-container"></div>


            <!--修改开始--> 
            <div class="content container">
                <div class="row">
                    <div class="col-md-3">     
                    </div>
                    <div class="col-md-3">
                        <button class="button_meals btn-block" disabled>
                            <h4 class="h4_meals">BREAKFAST</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="button_meals btn-block" disabled>
                            <h4 class="h4_meals">LUNCH</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="button_meals btn-block" disabled>
                            <h4 class="h4_meals">DINNER</h4>
                        </button>
                    </div>
                </div>
            </div> <!--content container-->



            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days" style="vtext-align: center">Monday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>  
                        <h4 id='MonBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='MonLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id="MonDinner"></h4>  
                    </div>                    
                </div>
            </div> <!--content container-->

            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Tuesday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='TueBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='TueLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>  
                        <h4 id="TueDinner"></h4>
                    </div>                    
                </div>
            </div> <!--content container-->

            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Wednesday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='WedBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='WedLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button> 
                        <h4 id="WedDinner"></h4>
                    </div>  
                </div>
            </div> <!--content container-->

            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Thursday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='ThurBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='ThurLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button> 
                        <h4 id="ThurDinner"></h4>
                    </div>
                </div>
            </div> <!--content container-->

            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Friday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='FriBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='FriLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id="FriDinner"></h4>
                    </div>
                </div>
            </div> <!--content container-->
            <div class="content container">
                <div class="row">
                    <div class="col-md-3"> 
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Saturday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='SatBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='SatLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id="SatDinner"></h4>
                    </div>
                </div>
            </div> <!--content container-->
            <div class="content container">
                <div class="row">
                    <div class="col-md-3">
                        <button class="button_days btn-block" disabled>
                            <h4 class="h4_days">Sunday</h4>
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="breakfast-show" >
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='SunBreakfast'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" src="images/pic101.jpg" class="lunch-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id='SunLunch'></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button"  class="dinner-show">
                            <img src="images/pic102.jpg" class="img-responsive" alt="Responsive image">
                        </button>
                        <h4 id="SunDinner"></h4>
                    </div>
                </div>   
            </div> <!--content container-->

            <div class="content container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <a href="totalRecipe.php">
                            <button type="button"style="  width:262.5px;  background-color: #ff9933; margin-top: 10px; margin-bottom: 30px; border-radius: 6px; border-style:outset; border-color: #ff9933; border-width:medium;"> 
                                <h4 class="h4_onbtn">View All Recipes ></h4>  
                            </button>
                        </a>
                    </div>
                    <div class="col-md-3" >
                        <form action="shoppingList.php" method="post">
                            <button id='shoppingList' type="button" class="btn_list btn-block" > <!--修改了这个button的class-->
                                <h4 class="h4_onbtn">Go to Shopping List ></h4>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!--修改结束-->

            <footer>
                <div class="content container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Call us toll-free at <span class="phone">888-555-1212</span></p>
                            <p>All contents &copy; 2018 <a href="#">What do we eat today</a>. All rights reserved.</p>    
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
                var dailyMeal = {
                    breakfastUrl: 'breakfast.php',
                    lunchUrl: 'lunch.php',
                    dinnerUrl: "dinner.php",
                    shoppingList: []
                };
                function loadModal() {
                    $('#breakfast-container').load(dailyMeal.breakfastUrl, function () {});
                    $('#lunch-container').load(dailyMeal.lunchUrl, function () {});
                    $('#dinner-container').load(dailyMeal.dinnerUrl, function () {});
                }
                ;
                function url_redirect(options) {
                    var $form = $("<form />");

                    $form.attr("action", options.url);
                    $form.attr("method", options.method);

                    for (var data in options.data) {
                        $form.append('<input type="hidden" name="' + data + '" value="' + options.data[data] + '" />');
                    }

                    $("body").append($form);
                    $form.submit();
                }
                function merge(...objs) {
                    return [].reduce.call(arguments, function (acc, x) {
                        Object.keys(x).forEach(function (k) {
                            acc[k] = (acc[k] || []).concat([x[k]]);
                        });
                        return acc;
                    }, {});
                }
                ;

                $(function () {
                    loadModal();
                    $('.breakfast-show').click(function () {
                        $('#breakfastModal').modal('show');
                        dailyMeal.nameId = $(this).siblings('h4').attr('id');
                        $('#breakfastModal').find('#name').empty();
                        $('#breakfastModal').find('#ingredient').empty();
                        $('#breakfastModal').find('#calories').empty();
                    });
                    $('.lunch-show').click(function () {
                        $('#lunchModal').modal('show');
                        dailyMeal.nameId = $(this).siblings('h4').attr('id');
                        $('#lunchModal').find('#name').empty();
                        $('#lunchModal').find('#ingredient').empty();
                        $('#lunchModal').find('#calories').empty();
                    });
                    $('.dinner-show').click(function () {
                        $('#dinnerModal').modal('show');
                        dailyMeal.nameId = $(this).siblings('h4').attr('id');
                        $('#dinnerModal').find('#name').empty();
                        $('#dinnerModal').find('#ingredient').empty();
                        $('#dinnerModal').find('#ingredient').empty();
                    });
                    $('#shoppingList').click(function () {
                        var finalList = [];
                        const reducer = (accumulator, currentValue) => accumulator + currentValue;
                        var result = merge.apply(null, dailyMeal.shoppingList);
                        $.each(result, function (index, value) {
                            var element = merge.apply(null, value);
                            var totalAmount = element['amount'].reduce(reducer);
                            var item = index + ':' + totalAmount + element['unit'][0];
                            finalList.push(item);
                        });
                        url_redirect({url: "shoppinglist3.php",
                            method: "POST",
                            data: {"finalIngredient": finalList}
                        });

                    });
                });


            </script>

    </body>
</html>