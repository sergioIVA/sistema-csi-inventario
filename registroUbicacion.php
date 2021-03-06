<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form>
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Registrar Piso</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                     <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Edificio</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="edificios">
						<option selected="">Elige...</option>
								     <?php 
									 include 'conexion/conexion.php';
                        if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                      } 
                        $sql = "SELECT * FROM edificio ORDER BY nombre ASC ";
                        $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
                         ?>
				            <option value="<?php echo $row['id_edi']?>"><?php echo $row['nombre']?></option>
				                <?php
				     }
									 ?>
								</select>
							</div>
						</div>					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" id="nombre" name="nombre1" placeholder="ejemplo Piso 1 ">
							</div>
						</div>
				</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
						
						    
							<button type="button"  onclick="registrarUbicacion(document.getElementById('edificios').options[edificios.selectedIndex].value,document.getElementById('nombre').value)" class="btn mb-20 btn-outline-primary" id="ssa-custom-agregarUbicacion">Registrar</button>
							
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
	