<!doctype html>
<html>
    <head>
       <!-- <link href="dropzone/style.css" rel="stylesheet" type="text/css">-->
       <?php include('include/head.php'); ?>
        <link href="dropzone/dropzone.css" rel="stylesheet" type="text/css">
        <!--<script src="dropzone/dropzone.js" type="text/javascript"></script>-->
        <script>
      function prueba(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	document.getElementById("nombre").innerHTML = "hola a todos ";
                document.getElementById("txtHint").innerHTML = this.responseText;

            }
        };
        xmlhttp.open("GET", "pruebaRuteo.php?q=" + str, true);
        xmlhttp.send();
    }
}

</script>

    </head>
    <body >
    <?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">


			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Coloca los archivos de Configuracion</h4>
						</div>
					</div>
				</div>

				<form action="upload.php" class="dropzone" id="dropzonewidget">
                
            </form><br><br>
            
          
			<div class="min-height-200px">
            <div id="txtHint"></div>

             <form>
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                 
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Registro de Equipo</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombre</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" id="nombre" placeholder="ejemplo Switch">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Marca</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="ejemplo Cisco" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Modelo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Sistema Operativo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="ejemplo wert4324" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IP de Administraccion</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="ejemplo 186.116.192.146" type="search">
							</div>
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
							<button type="button"  onclick="prueba(document.getElementById('nombre').value)" class="btn mb-20 btn-outline-primary" id="sa-custom-position">Se registro el dispositivo</button>
						</div>

             </form>

<br><br>
				
						
			</div>

			 <?php include('include/footer.php'); ?>
		</div>
	</div>
   
       
	<?php include('include/script.php'); ?>
    <script src="src/plugins/dropzone/src/dropzone.js"></script>

	
      <script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
	<!-- add sweet alert js & css in footer -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

	
    </body>
</html>
