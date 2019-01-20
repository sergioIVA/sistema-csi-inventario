<?php

    $id=$_POST['id'];
	$puerto=$_POST['puerto'];
	$equipo=$_POST['equipo'];
    
   include 'conexion/conexion.php';
   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

   $sql = "UPDATE backbone SET  puerto='".$puerto."',equipo='".$equipo."' WHERE id_back='".$id."'";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
       echo "Error updating record: " . $conn->error;
    }

$conn->close();


?>