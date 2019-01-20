<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
        <link href="tutdropzone/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet" type="text/css">
        <!--<script src="dropzone/dropzone.js" type="text/javascript"></script>-->
		<script src="js/metodos.js" type="text/javascript"></script>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div id="a">
<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >

        <?php
		
		    $id=$_GET['id'];
			$nombre=$_GET['nombre'];
		?>
			
          
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form action="mostrarArchivos.php" method="post">
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Registro de mantenimiento del Equipo <?php echo $nombre?></h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					<?php

					include 'conexion/conexion.php';
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					} 
					$sql = "SELECT * FROM equipo where id='".$id."'";
					$result = $conn->query($sql);
					
					

					?>
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fecha</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker"  id="fecha" placeholder="Seleccione Fecha" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" >Hora Inicio</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker"  id="hora_i" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Hora Final</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" id="hora_f" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group">
							<label>Descripcion</label>
							<textarea class="form-control" id="descripcion"></textarea>
						</div>
						
					
					<div class="collapse collapse-box" id="basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="copy-pre">

							</code></pre>
						</div>
					</div>
					
				</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">		    
							<button type="button"  onclick="registrarMantenimientoIndividual('<?php echo $nombre;?>',<?php echo $id;?>,document.getElementById('fecha').value,document.getElementById('hora_i').value,document.getElementById('hora_f').value,document.getElementById('descripcion').value)" class="btn mb-20 btn-outline-primary" id="sa-ingresarMantenimiento">Registrar</button>
							
							<div id="resultado"></div>
						</div>

             </form>

<br><br>
				
						
			</div>

			 <?php include('include/footer.php'); ?>
		</div>
	</div>
	<div>
	<?php include('include/script.php'); ?>
	<!-- add sweet alert js & css in footer -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
	
	<script src="src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
	<script src="src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
	<script src="src/plugins/jquery-asColorPicker/dist/jquery-asColorPicker.js"></script>
	<script>
		$(".colorpicker").asColorPicker();
		$(".complex-colorpicker").asColorPicker({
			mode: 'complex'
		});
		$(".gradient-colorpicker").asColorPicker({
			mode: 'gradient'
		});
	</script>
</body>
</html>	