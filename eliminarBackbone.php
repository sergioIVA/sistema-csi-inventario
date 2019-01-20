<?php
 $idBack=$_POST['id'];
 
  include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
          
			$sql="DELETE FROM backbone WHERE backbone.id_back = '".$idBack."'";
			if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
           } else {
           echo "Error deleting record: " . $conn->error;
            }

         $conn->close();
  
?>