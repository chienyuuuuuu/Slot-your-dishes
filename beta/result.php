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
if (filter_input(INPUT_POST, 'data') !== "") {
    $post_value = filter_input(INPUT_POST, 'data');
    $sql = "SELECT meal, meal_id, dish, ingredient, calories, image FROM menu2 where dish like '%$post_value%'";
} else {
    $sql = "SELECT meal, meal_id, dish, ingredient, calories, image FROM menu2";
}
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
<div>
    <style>
        a.load{
            position: absolute; 
            right: 30px;
            color: #ff9933;
            font-weight: bold;
        }
        a.load:hover{
            color: #e5892d;
            font-weight: bold;
            font-size: 15px;
        }
    </style>
    <div class="row" style="margin-top:10px">
        <div class="col-md-6" align="left"><h2>Breakfast</h2></div>
    </div>
    <div class="row">
        <?php
        foreach ($meals as $meal):
            if ($meal->meal == 'breakfast'):
                ?>
                <div class="breakfastRecipe col-md-3" id="breakfastrecipe" style="height:210px; display:none;">
                    <a href="recipe.php?meal=<?= $meal->meal ?>&name=<?= $meal->dish ?>" style="font-size: 18px; word-break: break-all; text-decoration:none;">
                        <img src="<?php echo $meal->image ?>" width="260px">
                        <?php echo $meal->dish ?>
                    </a>
                </div>
                <?php
            endif;
        endforeach;
        ?>
    </div>
    <a href="#" id="loadMoreB" class="load">+ Load More</a>
    <a hidden href="#" id="loadLessB" class="load">- Load Less</a>
    <div class="row" style="margin-top:20px">
        <div class="col-md-6" align=left><h2>Lunch</h2></div>
    </div>
    <div class="row">
        <?php
//print_r($meals);
        foreach ($meals as $meal):
            if ($meal->meal == 'lunch'):
                ?>
                <div class="lunchRecipe col-md-3" style="height:210px; display:none;">
                    <a href="recipe.php?meal=<?= $meal->meal ?>&name=<?= $meal->dish ?>" style="font-size: 18px; word-break: break-all; text-decoration:none;">
                        <img src="<?php echo $meal->image ?>" width="260px">
                        <?php echo $meal->dish ?>
                    </a>
                </div>
                <?php
            endif;
        endforeach;
        ?>
    </div>
    <a href="#" id="loadMoreL"class="load">+ Load More</a>
    <a hidden href="#" id="loadLessL" class="load">- Load Less</a>
    <div class="row" style="margin-top:20px">
        <div class="col-md-6" align=left><h2>Dinner</h2></div>
    </div>
    <div class="row">
        <?php
//print_r($meals);
        foreach ($meals as $meal):
            if ($meal->meal == 'dinner'):
                ?>
                <div class="dinnerRecipe col-md-3" style="height:210px; display:none;">
                    <a href="recipe.php?meal=<?= $meal->meal ?>&name=<?= $meal->dish ?>" style="font-size: 18px; word-break: break-all; text-decoration:none;">
                        <img src="<?php echo $meal->image ?>" width="260px">
                        <?php echo $meal->dish ?>
                    </a>
                </div>

                <?php
            endif;
        endforeach;
        ?>
    </div>
    <a href="#" id="loadMoreD" class="load">+ Load More</a>
    <a hidden href="#" id="loadLessD" class="load">- Load Less</a>
</div>
<script type="text/javascript">
    $(function () {
        $('.breakfastRecipe').slice(0, 4).show();
        $('.lunchRecipe').slice(0, 4).show();
        $('.dinnerRecipe').slice(0, 4).show();
        if ($('.breakfastRecipe').length < 5) {
            $("#loadMoreB").hide();
        }
        if ($('.lunchRecipe').length < 5) {
            $("#loadMoreL").hide();
        }
        if ($('.dinnerRecipe').length < 5) {
            $("#loadMoreD").hide();
        }
        $("#loadMoreB").on('click', function (e) {
            e.preventDefault();
            $(".breakfastRecipe:hidden").slice(0, 4).slideDown();
            if ($(".breakfastRecipe:hidden").length == 0) {
                $("#loadMoreB").hide();
                $("#loadLessB").show();
            }
        });
        $("#loadLessB").on('click', function (e) {
            e.preventDefault();
            $('.breakfastRecipe').hide();
            $('.breakfastRecipe').slice(0, 4).show();
            $("#loadLessB").hide();
            $("#loadMoreB").show();
        });
        $("#loadMoreL").on('click', function (e) {
            e.preventDefault();
            $(".lunchRecipe:hidden").slice(0, 4).slideDown();
            if ($(".lunchRecipe:hidden").length == 0) {
                $("#loadMoreL").hide();
                $("#loadLessL").show();
            }
        });
        $("#loadLessL").on('click', function (e) {
            e.preventDefault();
            $('.lunchRecipe').hide();
            $('.lunchRecipe').slice(0, 4).show();
            $("#loadLessL").hide();
            $("#loadMoreL").show();
        });
        $("#loadMoreD").on('click', function (e) {
            e.preventDefault();
            $(".dinnerRecipe:hidden").slice(0, 4).slideDown();
            if ($(".dinnerRecipe:hidden").length == 0) {
                $("#loadMoreD").hide();
                $("#loadLessD").show();
            }
        });
        $("#loadLessD").on('click', function (e) {
            e.preventDefault();
            $('.dinnerRecipe').hide();
            $('.dinnerRecipe').slice(0, 4).show();
            $("#loadLessD").hide();
            $("#loadMoreD").show();
        });
    });
</script>
