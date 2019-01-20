<?php


    $id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$tipo=$_POST['tipo'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$sistema=$_POST['sistema'];
	$ip=$_POST['ip'];
	$id_ubicacion=$_POST['id_ubicacion'];
	
include 'conexion/conexion.php';
   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

   $sql = "UPDATE equipo SET  nombre='".$nombre."',tipo='".$tipo."',marca='".$marca."',modelo='".$modelo."',sistemaOpe='".$sistema."' ,ip='".$ip."',ubica='$id_ubicacion' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>