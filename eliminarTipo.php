<?php

$id_tipo=$_POST['id_tipo'];

     include 'conexion/conexion.php';
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// sql to delete a record
		$sql = "DELETE FROM tipo WHERE id_tipo='$id_tipo'";

		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record: " . $conn->error;
		}

		$conn->close();

?>