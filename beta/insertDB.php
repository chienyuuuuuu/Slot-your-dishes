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
$meal = $_POST['meal'];
$dish = $_POST['dishName'];
$ingredient = $_POST['ingredient'];
$calories = $_POST['calories'];
$images = $_POST['imageName'];
$countsql = mysqli_query($conn, "SELECT COUNT(meal_id) FROM menu2 WHERE meal='$meal'");
$row = $countsql->fetch_row();
$countresult = $row[0] + 1;
echo $row[0];

//echo gettype ($countresult);
if ($images!=="") {
    $sql = "INSERT INTO menu2 (meal, meal_id, dish, ingredient, calories, image) "
            . "VALUES ('{$meal}','{$countresult}','{$dish}','{$ingredient}','{$calories}','images/{$images}')";
} else {
    $sql = "INSERT INTO menu2 (meal, meal_id, dish, ingredient, calories, image) "
            . "VALUES ('{$meal}','{$countresult}','{$dish}','{$ingredient}','{$calories}','images/default.jpg')";
}
if ($conn->query($sql) === TRUE) {
    $response = array(
        'status' => 'success',
        'meal' => $meal,
        'meal_id' => $countresult,
        'dish' => $dish,
        'ingredients' => $ingredient,
        'calories' => $calories,
        'images' => $images
    );
    //echo(json_encode($response));
    exit();

    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
