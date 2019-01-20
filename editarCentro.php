<?php
  
    $id_centro=$_POST['id_centro'];
    $nombre_centro=$_POST['nombre_centro'];
    $id_piso=$_POST['id_piso'];



        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
        $sql = "UPDATE centro_cableado SET nombre='$nombre_centro',id_ubi='$id_piso' WHERE id_centro='$id_centro'";

         $conn->query($sql);
	     $conn->close();
?>