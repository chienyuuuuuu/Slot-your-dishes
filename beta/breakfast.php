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
$sql = "SELECT meal_id, dish, ingredient, calories, image FROM menu2 WHERE meal='breakfast'";
$result = mysqli_query($conn, $sql);
$meals = array();

class meal {

    public $id;
    public $dish;
    public $ingredient;
    public $calories;
    public $images;

}

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $meal = new meal();
        $meal->id = $row['meal_id'];
        $meal->dish = $row['dish'];
        $meal->ingredient = $row['ingredient'];
        $meal->calories = $row['calories'];
        $meal->images = $row['image'];
        array_push($meals, $meal);
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!-- Breakfast -->
<div class="modal fade" id="breakfastModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height:60px">   
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 style="font-size:200%">Breakfast</h5>
            </div>
            <div class="modal-body" >
                <div id="breakfastSlot">
                    <ul class="slot">
                        <?php foreach ($meals as $meal): ?>
                        <li data-id="<?php echo $meal->id ?>"><img src="<?php echo $meal->images ?>"/></li>
<?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div id="information">
                <h3 id="name"></h3>
                <p id='ingredient'></p>
                <p id='calories'></p>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn" style="background-color:#ff9933; color: white; " id="breakfastSpin" value="Spin">
                <input type="button" class="btn btn-success" id="breakfastConfirm" value="Confirm">
            </div>

        </div>
    </div>
</div>
<!-- Breakfast -->
<script>
    $(function () {
        var breakfastIngredient;
        $('#breakfastModal').on('shown.bs.modal', function () {
            $('#breakfastSlot > .slot').jSlots({
                number: 1,
                spinner: '#breakfastSpin',
                time: 2000,
                loop: 2,
                onStart: function () {
                    $('#breakfastModal').find('#name').empty();
                    $('#breakfastModal').find('#ingredient').empty();
                    $('#breakfastModal').find('#calories').empty();
                },
                onEnd: function (number) {
                    var index = number[0];
                    var dataId = $('#breakfastSlot').find('ul li:nth-child(' + index + ')').data('id');
                    console.log(dataId);
                    var dish =<?php echo json_encode($meals); ?>;
                    console.log(dish);
                    var result = $.grep(dish, function (obj) {
                        return obj.id == dataId;
                    })[0];
                    $('#breakfastModal').find('#name').text(result['dish']);
                    breakfastIngredient = result['ingredient'];
//                    console.log('TEST');
//                    console.log(typeof(result['ingredient']));
                    var ingredients = $.parseJSON(result['ingredient']);
                    $.each(ingredients, function (key, value) {
                        $('#breakfastModal').find('#ingredient').append(key + ': ' + value['amount'] + value['unit'] + '<br>');
                    });
                    $('#breakfastModal').find('#calories').text('Calories: ' + result['calories'] + 'kcal');
                }
            });
        });
        $('#breakfastConfirm').click(function () {
            var name = $('#breakfastModal').find('#information #name').text();
            $('#' + dailyMeal.nameId).text(name);
            $('#' + dailyMeal.nameId).css({"height": "56px", "background-Color": "#ff9933", "margin":"auto"});
            $('#breakfastModal').modal('hide');
            $('#' + dailyMeal.nameId).siblings('button').remove();
            //dailyMeal.shoppingList = dailyMeal.shoppingList.concat(breakfastIngredient);
            dailyMeal.shoppingList = dailyMeal.shoppingList.concat(JSON.parse(breakfastIngredient));
            console.log(dailyMeal.shoppingList);
            console.log(name);
        });
    });
</script>