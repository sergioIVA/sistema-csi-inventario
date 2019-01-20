<?php
        
        $id_ubicacion=$_POST['id_ubicacion'];
        $nombre=$_POST['nombre'];
		$tipo=$_POST['tipo'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $sistema=$_POST['sistema'];
        $ip=$_POST['ip'];
		
        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 

        $sql = "INSERT INTO equipo (id,nombre,tipo,marca,modelo,sistemaOpe,ip,ubica) VALUES(null,'$nombre','$tipo','$marca','$modelo','$sistema','$ip','$id_ubicacion')";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";

         

         $idEquipo=$conn->insert_id;

         echo $idEquipo;

         $sql = "UPDATE uploads SET pertenece='".$idEquipo."' WHERE momento='actual'";

         $conn->query($sql);

         $sql = "UPDATE uploads SET momento='' WHERE momento='actual'";
          $conn->query($sql);
		  
		  
		  
		$puertos=$_POST['puertos'];
        $equipos=$_POST['equipos'];
		
	
                if(!Empty($puertos)&!Empty($equipos)){		
		                   
		  $puertos=preg_split("~,~",$_POST['puertos']);
		  $equipos=preg_split("~,~",$_POST['equipos']);
		  $cantidad=count($puertos);
		
		  $i=0;
		               while($i<$cantidad-1){
						
                  $sql = "INSERT INTO backbone (id_back,puerto,equipo,id_equipoRegistro) VALUES(null,'$puertos[$i]','$equipos[$i]','$idEquipo')";
                  $conn->query($sql);
                        $i++;				  
						   
					   }
						  }
       

        } else {
			
         echo "Error: " . $sql . "<br>" . $conn->error;
		 echo "<script>console.log(".$conn->error.");</script>";
       }

       $conn->close();
			
 

?>