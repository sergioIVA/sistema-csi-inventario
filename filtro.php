<?php 

  $id_ubicacion=$_POST['id'];
 

   include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
         
			$sql = "SELECT e.id,e.nombre,t.nombre nombre_tipo,e.marca,e.modelo,e.sistemaOpe,e.ip,ubi.nombre nombre_ubicacion,edi.nombre nombre_edificio,ubi.id_ubi FROM equipo e,tipo t,edificio edi,ubicacion ubi where e.tipo=t.id_tipo and e.ubica=ubi.id_ubi and ubi.id_edificio=edi.id_edi and ubi.id_ubi='$id_ubicacion'";
            $result = $conn->query($sql);

		$equipos="";	
			
        if ($result->num_rows > 0) {
        
       while($row = $result->fetch_assoc()) {
        
		$equipos.=$row['id']."-".$row['nombre']."-".$row['nombre_tipo']."-".$row['marca'].
		  "-".$row['modelo']."-".$row['sistemaOpe']."-".$row['ip']."-".$row['nombre_ubicacion']."-".$row['nombre_edificio']."-".$row['id_ubi'].",";
		
        }
      }

        echo $equipos;	  
		 
		 
         $conn->close();
  
?>