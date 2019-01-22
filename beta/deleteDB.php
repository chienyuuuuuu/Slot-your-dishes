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

$sql = "DELETE FROM menu2 WHERE meal = '{$meal}' AND dish = '{$dish}'";

if ($conn->query($sql) === TRUE) {
    $response = array(
	'status' => 'success',
    );
    echo(json_encode($response));
    exit();
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

//    $id = $_POST['id'];  
//    $num = $_POST['num'];  
//    $retureInfo = array(  
//        'status' => 0,  
//        'info' => '修改商品数量失败'  
//    );  
//    $sql = "UPDATE `cart` SET num='{$num}' WHERE `id`={$id}";  
//    mysql_query($sql);  
//    $row = mysql_affected_rows();  
//    if ($row == 1) {  
//        $retureInfo['status'] = 1;  
//        $retureInfo['info'] = '修改商品数量成功';  
//    }  
//    echo json_encode($retureInfo);  


