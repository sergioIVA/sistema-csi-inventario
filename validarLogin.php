<?php

	$user = $_POST['usuario'];
	$clave = $_POST['clave'];

	include 'conexion/conexion.php';
	
	
	$resultado="";
	$usuario="";

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	
	$sql = "SELECT * FROM usuario where username='$user'";
	$result = $conn->query($sql);
	
	 if (mysqli_num_rows($result) == 0) {
		 $resulta=0; 
	 }else
	 {
		 
		 while($row = $result->fetch_assoc()) 
		 {
          if(strcmp($row['clave'],$clave)==0)
		  {          
	        $usuario=$row['username'];
		    $resultado=1;   
				   }else{
					   
					   $resultado=2;
				   }
         }
		 
		 
	 }
	
     $conn->close();

     session_start();
     $_SESSION['usuario']=$usuario;
     echo $resultado;


?>