<?php

$id_edificio=$_POST['id_edificio'];
$nombre=$_POST['nombre'];


     include 'conexion/conexion.php';
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO ubicacion (id_ubi,nombre,id_edificio)
   VALUES (null,'$nombre','$id_edificio')";

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();

?>