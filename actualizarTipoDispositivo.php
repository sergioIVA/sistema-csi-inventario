<?php
    $id_tipo=$_POST['id_tipo'];
    $nombre=$_POST['nombre'];
  



        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
        $sql = "UPDATE tipo SET nombre='$nombre' WHERE id_tipo='$id_tipo'";

		
		if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
		} else {
		echo "Error updating record: " . $conn->error;
		}
	
	     $conn->close();



?>