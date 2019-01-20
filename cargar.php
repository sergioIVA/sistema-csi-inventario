<?php


echo "<script>console.log( 'Debug Objects: hola atodos' );</script>";
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);




if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
    $status = 1;
    
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "prueba";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO archivo(id,ruta) VALUES ('John', 'Doe')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



}



 ?>