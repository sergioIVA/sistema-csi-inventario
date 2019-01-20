<?php
	include 'conexion/conexion.php';
    $id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$tipo=$_POST['tipo'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$sistema=$_POST['sistema'];
	$ip=$_POST['ip'];
	$nombre_edificio=$_POST['nombre_edificio'];
	$nombre_ubicacion=$_POST['nombre_ubicacion'];
	$id_ubi=$_POST['id_ubi'];

?>

<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form action="mostrarArchivos.php" method="post">
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Editar Equipo: <?php echo $nombre;?></h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Edificio</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="edificios" onchange="tomarId(document.getElementById('edificios').options[edificios.selectedIndex].value)">
						<option>Elige...</option>
								     <?php 
                        $sql = "SELECT * FROM edificio";
                        $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
					   
					    if (strcmp($nombre_edificio, $row['nombre']) == 0){
                         ?>
				       <option value="<?php echo $row['id_edi']?>" selected=''><?php echo $row['nombre']?></option> 
				                <?php
				                }else{
								?>	
						<option value="<?php echo $row['id_edi']?>"><?php echo $row['nombre']?></option>
								
								<?php	
								}
				   }
							 ?>
								</select>
							</div>
						</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ubicacion</label>
							<div class="col-sm-12 col-md-10">
								<select id="ubicaciones"  class="custom-select col-12" >
									<option selected="">elige...</option>
									<option value="<?php echo $id_ubi?>" selected=""><?php echo $nombre_ubicacion;?></option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $nombre;?>" type="text" id="nombre" name="nombre1" placeholder="ejemplo FUSR1">
							</div>
						</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tipo</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="tipos">
						<option >Elige...</option>
								     <?php 
									 
					
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                         } 			 
									 
                        $sql = "SELECT * FROM tipo  ORDER BY nombre ASC";
                        $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
					   
					      if (strcmp($tipo, $row['nombre']) == 0){
                         ?>
						                 
				   <option value="<?php echo $row['id_tipo']?>" selected=''><?php echo $row['nombre']?></option>
							
				                <?php
									 }else{
									 ?>
							<option value="<?php echo $row['id_tipo']?>"><?php echo $row['nombre']?></option>
									 
									 <?php
									 }
				   }
									 ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Marca</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $marca;?>" id="marca" placeholder="ejemplo Cisco" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Modelo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $modelo;?>" id="modelo" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Sistema Operativo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $sistema;?>" id="sistema" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IP de Administraccion</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $ip;?>" id="ip" placeholder="ejemplo 186.116.192.146" type="search">
							</div>
						</div>					
				</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
						
						    
							<button type="button"  onclick="editarEquipo(<?php echo $id;?>,document.getElementById('nombre').value,  document.getElementById('tipos').options[tipos.selectedIndex].value,document.getElementById('marca').value,document.getElementById('modelo').value,document.getElementById('sistema').value,document.getElementById('ip').value,document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value)" class="btn mb-20 btn-outline-primary" id="sa-custom-editEquipo">Registrar</button>
							
							<div id="resultado"></div>
						</div>

             </form>

<br><br>
				
						
			</div>

			
		</div>
	</div>

	<!-- add sweet alert js & css in footer -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
	