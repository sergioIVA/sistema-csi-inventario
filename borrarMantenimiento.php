<?php 

 $id=$_POST['id'];
 
 
  //$conn = new mysqli("localhost","root","123456","dropzone");
  include 'conexion/conexion.php';
  
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
          
			$sql="DELETE FROM mantenimientos WHERE mantenimientos.id_mante = '".$id."'";
			if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
           } else {
           echo "Error deleting record: " . $conn->error;
            }

         $conn->close();
 
 


?>