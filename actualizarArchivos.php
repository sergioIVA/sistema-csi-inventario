<?php

$idEquipo=$_POST['id'];
$descripcion=$_POST['descripcion'];



include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
				 
		echo $idEquipo;		 
$sql = "UPDATE uploads SET pertenece='".$idEquipo."' WHERE momento='actual'";

         $conn->query($sql);

         $sql = "UPDATE uploads SET momento='' WHERE momento='actual'";
         $conn->query($sql);
		 
		 $sql="";
		 
	     $conn->close();
			


?>