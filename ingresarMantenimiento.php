<?php


 $equipo=$_POST['equipo'];
 $fecha=$_POST['fecha'];
 $hora_i=$_POST['hora_i'];
 $hora_f=$_POST['hora_f'];
 $descripcion=$_POST['descripcion'];
			    
        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 

        $sql = "INSERT INTO mantenimientos (id_mante,equipo,fecha,hora_inic,hora_f,descripcion) 
		VALUES(null,'$equipo','$fecha','$hora_i','$hora_f','$descripcion')";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
        } else {
			
         echo "Error: " . $sql . "<br>" . $conn->error;
		 echo "<script>console.log(".$conn->error.");</script>";
       }

       $conn->close();
			
             
?>