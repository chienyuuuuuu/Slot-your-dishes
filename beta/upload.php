<?php

// File name
$file_name = $_FILES['image']['name'];
$target = "images/" . basename($file_name);
// File extension
$file_type = pathinfo($file_name, PATHINFO_EXTENSION);

// Validate type of file
if(in_array(strtolower($file_type), [ 'jpeg', 'jpg', 'png', 'gif' ])) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}
else {
    echo 'Error : Only JPEG, PNG & GIF allowed';
}

