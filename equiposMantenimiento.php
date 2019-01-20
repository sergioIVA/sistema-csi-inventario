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
								<h3>EQUIPOS
							</div>
						</div>
					</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<button type="button" onclick="filtrarMantenimientos(document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value)"  class="btn btn-info">Filtrar<span class="fa fa-search"></span></button>
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
							<label class="col-sm-12 col-md-2 col-form-label">Ubicacion</label>
							<div class="col-sm-12 col-md-10">
								<select id="ubicaciones"  class="custom-select col-12" >
									<option selected="">elige...</option>
								</select>
							</div>
						</div>	
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
					</div>
					<?php
					$sql = "SELECT e.id,e.nombre,e.marca,e.modelo,e.sistemaOpe,e.ip,e.ubica,t.id_tipo,t.nombre nombre_tipo FROM equipo e,tipo t where e.tipo=t.id_tipo";
                     $result = $conn->query($sql);
					 if ($result->num_rows > 0) {
						 ?>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">nombre</th>
								<th scope="col">Tipo</th> 
								<th scope="col">marca</th>
								<th scope="col">modelo</th>
								<th scope="col">sistema Operativo</th>
								<th scope="col">Ip</th>
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

                       <th scope="row" id="id"><?php echo $valor?></th>
                       <td><?php echo $row['nombre']?></td>
					   <td><?php echo $row['nombre_tipo']?></th>
			           <td><?php echo $row['marca'] ?></td>
			           <td><?php echo $row['modelo']?></td>
			           <td><?php echo $row['sistemaOpe']?></td>
			           <td><?php echo $row['ip']?></td>
					   <td><button type="button"  title="Mantenimientos!" class="btn btn-warning" onclick="mostrarMantenimiento_Equipo(<?php echo $row['id'];?>,'<?php echo $row['nombre'];?>')"><i class="fa fa-suitcase" aria-hidden="true"></i></button></td>
                       <?php
					     $valor++;
                        }
				 
                        ?>
                     </tr>
               
                    <?php  
                      }	else{
						  
						?> 
                       <h5>No se encuentrar registrados dispositivos ! </h5>
                    <?php						
						  
					  }				
                    $conn->close();
                    ?>
							
						</tbody>
					</table>
				</div>
		</div>
		</div>
	</div>
	