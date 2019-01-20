<?php

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


/**
$valor="fhasgf";
echo "<script>console.log( 'Debug Objects: " . $valor . "' );</script>";
**/
  
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {

    $status = 1;
}

echo "hola a todos ";

