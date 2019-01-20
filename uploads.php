<?php

echo "<script>console.log( 'Debug Objects: se invoco el php' );</script>";
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	if(isset($_GET["delete"]) && $_GET["delete"] == true)
	{
		$name = $_POST["filename"];
		

		if(file_exists('./uploads/'.$name))
		{
			unlink('./uploads/'.$name);
		

			include 'conexion/conexion.php';
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 

           $sql = "DELETE FROM uploads WHERE name = '$name'";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
        } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }

       $conn->close();
			
			
			
			echo json_encode(array("res" => true));
		}
		else
		{
			echo json_encode(array("res" => false));
		}
	}
	else
	{

		$prueba=$_POST['dato']."dato";
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize =FileSizeConvert($_FILES["file"]["size"]);
		$ruta=$_FILES["file"]["tmp_name"];
		
	
        $ruta='/uploads/'.$_FILES["file"]["name"];
		
		
		if(!is_dir("uploads/"))
			mkdir("uploads/", 0777);

		if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$file))
		{
			
			
			
			include 'conexion/conexion.php';
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 

           $sql = "INSERT INTO uploads (id,name,ruta,momento,tipo,size)
            VALUES(null, '$file','$ruta','actual','$filetype','$filesize')";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
		
        } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }

       $conn->close();
			
	
		}
	}
}


function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
