<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >


			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Coloca los archivos de Configuracion</h4>
						</div>
					</div>
				</div>
<?php

	include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
           

?>
				<form action="uploads.php" class="dropzone" id="dropzone">
				<input type="hidden" name="dato" id="dato2" value="sergio villamizar">
                
            </form><br><br>
           
           <!-- 
            <div id="dropzone" class="dropzone">
		   </div>
		   -->
          
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form action="mostrarArchivos.php" method="post">
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Registro de Equipo</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Edificio</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="edificios" onchange="tomarId(document.getElementById('edificios').options[edificios.selectedIndex].value)">
						<option selected="">Elige...</option>
								     <?php 
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
							<label class="col-sm-12 col-md-2 col-form-label">Pisos</label>
							<div class="col-sm-12 col-md-10">
								<select id="ubicaciones"  class="custom-select col-12" onchange="consultar_centro(document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value)">
									<option selected="">elige...</option>
								</select>
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Centro de Cableado</label>
							<div class="col-sm-12 col-md-10">
								<select id="centro"  class="custom-select col-12" >
									<option selected="">elige...</option>
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"># Rack</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" id="rack" name="rack1" placeholder="ejemplo 1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"># Switch</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" id="rack" name="rack1" placeholder="ejemplo 1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" id="nombre" name="nombre1" placeholder="ejemplo FUSR1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tipo</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" id="tipos">
						<option selected="">Elige...</option>
								     <?php 
									 
					
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                         } 			 
									 
                        $sql = "SELECT * FROM tipo";
                        $result = $conn->query($sql);
				       
                   while($row = $result->fetch_assoc()) {
                         ?>
				            <option value="<?php echo $row['id_tipo']?>"><?php echo $row['nombre']?></option>
				                <?php
				     }
									 ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Marca</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="marca" placeholder="ejemplo Cisco" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Modelo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="modelo" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Sistema Operativo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="sistema" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IP de Administraccion</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="ip" placeholder="ejemplo 186.116.192.146" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Backbone:</label>
							<div class="col-sm-12 col-md-10">
							</div>
						</div>
						<div id="mensaje"></div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Puerto</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="puerto1" placeholder="ejemplo 27" type="search">
								<input class="form-control" id="puerto" placeholder="" type="hidden">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Equipo Asociado</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" id="equipo1" placeholder="FUR1S1" type="search">
								<input class="form-control" id="equipo"  type="hidden">
							</div>
						</div>
					
						    <center><button type="button"  onclick="ingresarBackbones(document.getElementById('puerto1').value,document.getElementById('equipo1').value)" class="btn btn-success" id="">Ingresar backbone</button></center>
						
						
				
					
				</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
						<!--<button type="submit" class="btn mb-20 btn-outline-primary" id="sa-custom-position">Registrar</button>-->
						    
							<button type="button"  onclick="registrar(document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value,document.getElementById('nombre').value,  document.getElementById('tipos').options[tipos.selectedIndex].value,document.getElementById('marca').value,document.getElementById('modelo').value,document.getElementById('sistema').value,document.getElementById('ip').value,document.getElementById('puerto').value,document.getElementById('equipo').value)" class="btn mb-20 btn-outline-primary" id="sa-custom-position">Registrar</button>
							
							<div id="resultado"></div>
						</div>

             </form>

<br><br>
				
						
			</div>

			
		</div>
	</div>
	
	<script src="tutdropzone/bower_components/dropzone/downloads/dropzone.min.js"></script>

	<script>
	
	function ingresarBackbones(puerto,equipo){
		document.getElementById('puerto').value=document.getElementById('puerto').value+puerto+",";
		document.getElementById('equipo').value=document.getElementById('equipo').value+equipo+",";
		document.getElementById("puerto1").value = "";
		document.getElementById("equipo1").value = "";
		jQuery("#mensaje").html('');
		jQuery("#mensaje").append('<div class="alert alert-primary" role="alert">¡Se registro un backbone con puerto:'+puerto+' y equipo : '+equipo+'!</div>');
	    //alert("Se agrego backbone");
		
	}
	
	</script>
      <script>
		Dropzone.autoDiscover = false;
		$("#dropzone").dropzone({
			url: "uploads.php?dato="+document.getElementById("nombre").value,
			addRemoveLinks: true,
			maxFileSize: 1000,
			dictResponseError: "Ha ocurrido un error en el server",
			//acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
			complete: function(file)
			{
			
			    /**
				if(file.status == "success")
				{
					alert("El siguiente archivo ha subido correctamente: " + file.name);
				}
				**/
			},
			error: function(file)
			{
				alert("Error subiendo el archivo " + file.name);
			},



            removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}

			/**
			removedfile: function(file, serverFileName)
			{
				var name = file.name;
				var hola="hola a todos";
				$.ajax({
					type: "POST",
					url: "uploads.php?delete=true",
					data:{
						"filename":name,
						 "dato": hola
					},

					 //"filename="+name,
					success: function(data)
					{
						var json = JSON.parse(data);
						if(json.res == true)
						{
							var element;
							(element = file.previewElement) != null ? 
							element.parentNode.removeChild(file.previewElement) : 
							false;
							alert("El elemento fué eliminado: " + name); 
						}
					}
				});
			}
			**/
		});
	
	</script>
	
	<!-- add sweet alert js & css in footer -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
	