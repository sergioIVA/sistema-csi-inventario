<?php
  
    $id_centro=$_POST['id_centro'];
    $nombre=$_POST['nombre'];
    $id_piso=$_POST['id_piso'];



        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
        $sql = "UPDATE centro_cableado SET nombre='$nombre',id_ubi='$id_piso' WHERE id_ubi='$id_centro'";

         $conn->query($sql);
	     $conn->close();
?>