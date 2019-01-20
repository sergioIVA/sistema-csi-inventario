<?php

$cadena="27";
$array=preg_split("~,~",$cadena);


    $conteoCadena=count($array);
	echo $conteoCadena;

	$i=0;
	
         while($i<$conteoCadena){
		 
            echo $array[$i];
            $i++;			
		 }
?>