<?php

$id_ubica=$_POST['id_ubica'];
$nombre=$_POST['nombre'];


     include 'conexion/conexion.php';
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO centro_cableado (id_centro,nombre,id_ubi)
   VALUES (null,'$nombre','$id_ubica')";

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();

?>