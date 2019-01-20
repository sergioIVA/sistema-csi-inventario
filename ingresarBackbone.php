<?php

      $puerto=$_POST['puerto'];
	  $equipo=$_POST['equipo'];
	  $id_equipoRegistro=$_POST['id_equipoRegistro'];

  include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
           
             $sql = "INSERT INTO backbone (id_back,puerto,equipo,id_equipoRegistro) VALUES(null,'$puerto',' $equipo','$id_equipoRegistro')";

        if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
		}
		else{
			
					
         echo "Error: " . $sql . "<br>" . $conn->error;
		 echo "<script>console.log(".$conn->error.");</script>";
       }

       $conn->close();
			

?>