<?php
	include 'conexion/conexion.php';
    $id_centro=$_POST['id_centro'];
	$nombre_centro=$_POST['nombre_centro'];
	$nombre_edificio=$_POST['nombre_edificio'];
	$nombre_piso=$_POST['nombre_piso'];
	$id_ubi=$_POST['id_piso'];

?>

<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form action="mostrarArchivos.php" method="post">
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Editar Centro de Cableado: <?php echo $nombre_centro;?></h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Edificio</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="edificios" onchange="tomarId(document.getElementById('edificios').options[edificios.selectedIndex].value)">
						<option>Elige...</option>
								     <?php 
                        $sql = "SELECT * FROM edificio ORDER BY nombre ASC";
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
							<label class="col-sm-12 col-md-2 col-form-label">Piso</label>
							<div class="col-sm-12 col-md-10">
								<select id="ubicaciones"  class="custom-select col-12" >
									<option selected="">elige...</option>
									<option value="<?php echo $id_ubi?>" selected=""><?php echo $nombre_piso;?></option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombre Centro</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="<?php echo $nombre_centro;?>" type="text" id="centro_cableado" name="ids"  placeholder="ejemplo salon/oficina">
							</div>
						</div>				
				</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
						
						    
							<button type="button"  onclick="editarCentro(<?php echo $id_centro;?>,document.getElementById('centro_cableado').value,document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value)" class="btn mb-20 btn-outline-primary" id="sa-custom-editEquipo">Registrar</button>
							
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
	