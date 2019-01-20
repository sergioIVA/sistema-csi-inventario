<?php
  
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
  
?>

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
			<?php

			
			include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
            $sql = "SELECT * FROM equipo e,uploads a where e.id=a.pertenece and e.id='".$id."'";
            $result = $conn->query($sql);
            
            ?>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
					
					
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<!--<h4 class="text-blue">Coloca los archivos de Configuracion</h4>-->
							<h3>EQUIPO : <?php echo $nombre?></h3>
						</div>
					</div>
				</div>

						<div class="pull-left">
						</div>
						<div class="pull-right">
							<!--
							<a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
							-->
							<!--<i class="icon-copy fa fa-upload" aria-hidden="true"></i>-->
							<button type="submit" onclick="mostrarEquipos(<?php echo $id;?>,'<?php echo $nombre;?>')" class="btn btn-primary">Volver<span class="fa fa-mail-reply-all"></span></button>
							<button type="button" class="btn btn-success" onclick="subirArchivo(<?php echo $id;?>,'<?php echo $nombre;?>')">Subir<span class="icon-copy fa fa-upload"></span></button>
							<!--
							<button type="button" class="btn btn-secondary" onclick="mostrarEquipos(<?php echo $id;?>,'<?php echo $nombre;?>')">Volver<span ></span></button>
							-->

						</div>
					</div>
				<?php	if ($result->num_rows > 0) {
					
					?>
					
					
					<table class="table table-responsive">
						<thead>
							<tr>
								<th scope="col">#id</th>
								<th scope="col">nombre</th>
								<th scope="col">tipo</th> 
								<th scope="col">tamaño</th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php
				   
                   while($row = $result->fetch_assoc()) {
          	                 ?>
                    <tr>

                       <th scope="row"><?php echo $row['id']?></th>
                       <td><?php echo $row['name']?></td>
					   <td><?php echo $row['tipo']?></th>
			           <td><?php echo $row['size']?></td>
			           <td></td>
			           <td></td>
			           <td></td>
					   <td></td>
					    <td>
					   <button type="button" title="eliminar!" onclick="eliminarArchivo(<?php echo $row['id'];?>,'<?php echo $row['ruta'];?>',<?php echo $id;?>,'<?php echo $nombre;?>')" class="btn btn-danger"><i class="icon-copy fi-x"></i></button>
					   </td>
					   <td>
					   <a  href="/modulo_csi_v2<?php echo $row['ruta'];?>" download class="btn btn-primary"  title="descargar!" ><i class="icon-copy fa fa-download" aria-hidden="true"></i></a>
					   </td>

                       <?php
                        }
				 
                        ?>
                     </tr>
               
                    <?php
				}	else{
					?>
					
					<h5>No hay archivos asociados a este equipo !</h5>
					
					<?php
				     }				
                    $conn->close();
                    ?>
							
						</tbody>
					</table>
					<form></form>
				</div>
		</div>
		</div>
	</div>

   
	
	