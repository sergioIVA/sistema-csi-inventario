<?php

$id=$_POST['id'];
$nombre=$_POST['nombre'];

?>

<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" >


			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Coloca los archivos de Configuracion</h4>
						</div>
					</div>
				</div>

				<form action="uploads.php" class="dropzone" id="dropzone">
				<input type="hidden" name="dato" id="dato2" value="sergio villamizar">
                
            </form><br><br>
           
           <!-- 
            <div id="dropzone" class="dropzone">
		   </div>
		   -->
		   
		      	<!--<button type="submit" class="btn mb-20 btn-outline-primary" id="sa-custom-position">Registrar</button>-->
				
				<div class="min-height-200px">
					<div id="txtHint"></div>

						<form action="mostrarArchivos.php" method="post">
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
						<!--<button type="submit" class="btn mb-20 btn-outline-primary" id="sa-custom-position">Registrar</button>-->
						    
							
							<button type="button"  onclick="updateArchivos(<?php echo $id;?>,'<?php echo $nombre;?>')" class="btn mb-20 btn-outline-primary" id="sa-subirArchivo">Registrar</button>
						</div>		
							<div id="resultado"></div>
				</div>

                </form>
	    </div>

<br><br>
				
						
			</div>
	
	<script src="tutdropzone/bower_components/dropzone/downloads/dropzone.min.js"></script>

	
      <script>
		Dropzone.autoDiscover = false;
		$("#dropzone").dropzone({
			url: "uploads.php?dato="+<?php echo $id;?>,
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
	
	
	