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
							<h3>Centros de Cableados</h3>
						</div>
					</div>
				</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<button type="submit" onclick="mostrarRegistroCentro()" class="btn btn-success">Agregar<span class="fa fa-desktop"></span></button>
						</div>
					</div>
					<table class="table table-responsive">
						<thead>
						<?php  
						$sql = "SELECT e.nombre nombre_edi,u.id_ubi,u.nombre nombre_piso,c.id_centro,c.nombre nombre_centro FROM edificio e,ubicacion u ,centro_cableado c where e.id_edi=u.id_edificio and u.id_ubi=c.id_ubi ORDER BY nombre_edi,nombre_piso ASC";
                       $result = $conn->query($sql);
				     if ($result->num_rows > 0) {
						?>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Edificio</th>
								<th scope="col">Piso</th>
								<th scope="col">Centro de Cableado</th>
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
					     <td><?php echo $row['nombre_edi']?></td>
						  <td><?php echo $row['nombre_piso']?></td>
					   <td><?php echo $row['nombre_centro']?></td>
                      
					 
				   <td><button type="button"  onclick="mostrarEditarCentro(<?php echo $row['id_centro']?>,'<?php echo $row['nombre_centro'] ?>','<?php echo $row['nombre_edi'];?>','<?php echo $row['nombre_piso']?>',<?php echo $row['id_ubi']?> )" title="editar!" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></td>
					    <td>
					   <button title="Borrar!" type="button"  class="btn btn-danger" onclick="eliminarCentro(<?php echo $row['id_centro'];?>)"><i class="icon-copy fi-x"></i></button>
					   </td>
                       <?php
					   $valor++;
                        }
				 
                        ?>
                     </tr>
               
                    <?php  
                      }	else{
						  
						?> 
                       <h5>No se encuentrar Centro de Cableados ! </h5>
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
	
 
	
	