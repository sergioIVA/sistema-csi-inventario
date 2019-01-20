<?php

$id=$_POST['id'];
   
  
   include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
			$sql = "SELECT * FROM equipo e,uploads a where e.id=a.pertenece and e.id='".$id."'";
			
			$result=$conn->query($sql);
				
				$rutaM="";
				$ruta="";
				if($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$ruta=substr($row['ruta'],1);
					$rutaM.="-".$ruta;
					unlink($ruta);
					}
				}
				echo $rutaM;
            
           
        $sql="DELETE FROM equipo WHERE equipo.id = '".$id."'";
		$conn->query($sql);
        $conn->close();

?>