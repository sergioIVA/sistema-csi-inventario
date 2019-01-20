<?php

    $id_edificio=$_POST['id_edificio'];
	$nombre=$_POST['nombre'];



include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
       $sql = "UPDATE edificio SET nombre='$nombre' WHERE id_edi='$id_edificio'";

	    
	    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
       echo "Error updating record: " . $conn->error;
       }
	  
	     $conn->close();


?>