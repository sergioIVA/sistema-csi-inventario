<?php
$nombre=$_POST['nombre'];


     include 'conexion/conexion.php';
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO tipo (id_tipo,nombre)
   VALUES (null,'$nombre')";

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();

?>	