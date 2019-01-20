<?php

$id=$_POST['id'];
include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
		$resultado="";		 
				 $sql = "SELECT u.nombre,u.id_ubi FROM edificio e,ubicacion u where e.id_edi=u.id_edificio and u.id_edificio='".$id."' ORDER BY nombre ASC";
                 $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
					   
					 $resultado.="".$row['nombre']."-".$row['id_ubi'].",";
					 
				   }
				   
				   
				   echo $resultado;
				  
				   $conn->close();
?>