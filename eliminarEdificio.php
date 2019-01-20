<?php
    
	
	$id_edificio=$_POST['id_edificio'];
	
    include 'conexion/conexion.php';
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

   $sql = "DELETE FROM edificio WHERE id_edi='$id_edificio'";

    if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
   } else {
     echo "Error deleting record: " . $conn->error;
     }

      $conn->close();


?>