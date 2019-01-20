<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
			<?php

			
			include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
           
                	
            ?>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				  <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h3>PISOS</h3>
						</div>
					</div>
				</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<button type="submit" onclick="mostrarRegistroUbicacion()" class="btn btn-success">Agregar<span class="fa fa-desktop"></span></button>
						</div>
					</div>
					<table class="table table-responsive">
						<thead>
						<?php  
						$sql = "SELECT e.id_edi,e.nombre,u.id_ubi,u.nombre nombreUbi,u.id_edificio FROM ubicacion u ,edificio e where id_edificio=id_edi ORDER BY e.nombre,nombreUbi ASC";
                       $result = $conn->query($sql);
				     if ($result->num_rows > 0) {
						?>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Edificio Asociado</th>
								<th scope="col">Pisos</th>
								
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								
								
							</tr>
						</thead>
						<tbody id="contenido">
							<?php
					
				  $valor=1;
                   while($row = $result->fetch_assoc()) {
          	                 ?>
                    <tr>
					   <td><?php echo $valor?></td>
					   <td><?php echo $row['nombre']?></td>
                       <td><?php echo $row['nombreUbi']?></td>
				   <td><button type="button"  onclick="mostrarEditarUbicaciones(<?php echo $row['id_ubi']?>,'<?php echo $row['nombreUbi'] ?>',<?php echo $row['id_edificio'];?>)" title="editar!" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></td>
					    <td>
					   <button title="Borrar!" type="button"  class="btn btn-danger" onclick="eliminarUbicacion(<?php echo $row['id_ubi'];?>)"><i class="icon-copy fi-x"></i></button>
					   </td>
                       <?php
					   $valor++;
                        }
				 
                        ?>
                     </tr>
               
                    <?php  
                      }	else{
						  
						?> 
                       <h5>No se encuentrar registrados localizaciones ! </h5>
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
	
 
	
	