<?php

  $idArchivo=$_POST['idArchivo'];
  $ruta=$_POST['url'];

  
  $ruta1=substr($ruta,1);
  unlink($ruta1);
   
  
   include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
          
			$sql="DELETE FROM uploads WHERE uploads.id = '".$idArchivo."'";
			if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
           } else {
           echo "Error deleting record: " . $conn->error;
            }

         $conn->close();
  
       
 
?>