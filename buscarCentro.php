<?php
$id=$_POST['id'];
include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
		         $resultado="";		 
				 $sql = "SELECT c.nombre,c.id_ubi FROM edificio e,ubicacion u,centro_cableado c where
                 e.id_edi=u.id_edificio and u.id_ubi=c.id_ubi and c.id_ubi='".$id."'";
                 $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
					   
					 $resultado.="".$row['nombre']."-".$row['id_ubi'].",";
					 
				   }
				   
				   
				   echo $resultado;
				  
				   $conn->close();

				   ?>