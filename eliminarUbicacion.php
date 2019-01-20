<?php
	$id_ubicacion=$_POST['id_ubicacion'];
	
    include 'conexion/conexion.php';
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

   $sql = "DELETE FROM ubicacion WHERE id_ubi='$id_ubicacion'";

    if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
   } else {
     echo "Error deleting record: " . $conn->error;
     }

      $conn->close();
	  
?>	  