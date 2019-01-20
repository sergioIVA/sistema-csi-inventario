<?php
	$id_centro=$_POST['id_centro'];
	
    include 'conexion/conexion.php';
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

   $sql = "DELETE FROM centro_cableado WHERE id_centro='$id_centro'";

    if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
   } else {
     echo "Error deleting record: " . $conn->error;
     }

      $conn->close();
?>