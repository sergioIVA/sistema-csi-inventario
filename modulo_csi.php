<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo "<script>usted no ha iniciado session</script>";
    echo '<script>location.href="login.php"</script>';
}else{

?>
<!doctype html>
<html>
    <head>
       <!-- <link href="dropzone/style.css" rel="stylesheet" type="text/css">-->
       <?php include('include/head.php'); ?>
	   	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
        <link href="tutdropzone/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet" type="text/css">
        <!--<script src="dropzone/dropzone.js" type="text/javascript"></script>-->
	
		
    </head>
    <body >
    <?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>

	
	<div id="a">
	
	</div>
   
       
	<?php include('include/script.php'); ?>
	
 
  
    </body>
	
</html>
<?php

}
?>