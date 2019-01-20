<?php


    $id_ubicacion=$_POST['id_ubicacion'];
    $nombre=$_POST['nombre'];
    $id_edificio=$_POST['id_edificio'];



        include 'conexion/conexion.php';

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
        $sql = "UPDATE ubicacion SET nombre='$nombre',id_edificio='$id_edificio' WHERE id_ubi='$id_ubicacion'";

         $conn->query($sql);
	     $conn->close();

?>