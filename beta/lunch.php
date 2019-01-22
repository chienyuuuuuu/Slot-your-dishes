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
$sql = "SELECT meal_id, dish, ingredient, calories, image FROM menu2 WHERE meal='lunch'";
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
//for($x=0; $x<count($meals) ; $x++){
//    echo $x.':'.$meals[$x]->dish."<br>";
//}
$conn->close();
?>

<!-- Lunch -->
<div class="modal fade" id="lunchModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height:60px">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 style="font-size:200%">Lunch</h5>
            </div>
            <div class="modal-body">
                <div id="lunchSlot">
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
                <input type="button" class="btn" style="background-color:#ff9933; color: white" id="lunchSpin" value="Spin">
                <input type="button" class="btn btn-success" id="lunchConfirm" value="Confirm">
            </div>
        </div>
    </div>
</div>

<!-- Lunch -->
<script>
    $(function () {
        var lunchIngredient;
        $('#lunchModal').on('shown.bs.modal', function () {
            $('#lunchSlot > .slot').jSlots({
                number: 1,
                spinner: '#lunchSpin',
                time: 2000,
                loop: 2,
                onStart: function () {
                    $('#lunchModal').find('#name').empty();
                    $('#lunchModal').find('#ingredient').empty();
                    $('#lunchModal').find('#calories').empty();
                },
                onEnd: function (number) {
                    var index = number[0];
                    var dataId = $('#lunchSlot').find('ul li:nth-child(' + index + ')').data('id');
                    console.log(dataId);
                    var dish =<?php echo json_encode($meals); ?>;
                    console.log(dish);
                    var result = $.grep(dish, function (obj) {
                        return obj.id == dataId;
                    })[0];
                    $('#lunchModal').find('#name').text(result['dish']);
                    lunchIngredient = result['ingredient'];
//                    console.log('TEST');
//                    console.log(typeof(result['ingredient']));
                    var ingredients = $.parseJSON(result['ingredient']);
                    $.each(ingredients, function (key, value) {
                        $('#lunchModal').find('#ingredient').append(key + ': ' + value['amount'] + value['unit'] + '<br>');
                    });
                    $('#lunchModal').find('#calories').text('Calories: ' + result['calories'] + 'kcal');
                }
            });
        });
        $('#lunchConfirm').click(function () {
            var name = $('#lunchModal').find('#information #name').text();
            $('#' + dailyMeal.nameId).text(name);
            $('#' + dailyMeal.nameId).css({"height": "56px", "background-Color": "#ff9933", "margin": "auto"});
            $('#lunchModal').modal('hide');
            $('#' + dailyMeal.nameId).siblings('button').remove();
            //dailyMeal.shoppingList = dailyMeal.shoppingList.concat(lunchIngredient);
            dailyMeal.shoppingList = dailyMeal.shoppingList.concat(JSON.parse(lunchIngredient));
            console.log(dailyMeal.shoppingList);
            console.log(name);
        });
    });
</script>