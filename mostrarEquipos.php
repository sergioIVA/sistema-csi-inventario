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
							<h3>EQUIPOS</h3>
						</div>
					</div>
				</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<button type="button" onclick="filtrar(document.getElementById('ubicaciones').options[ubicaciones.selectedIndex].value)"  class="btn btn-info">Filtrar<span class="fa fa-search"></span></button>
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
							<label class="col-sm-12 col-md-2 col-form-label">Rack</label>
							<div class="col-sm-12 col-md-10">
								<select id=""  class="custom-select col-12" >
									<option selected="">elige...</option>
									<option>Rack 1</option>
								</select>
							</div>
						</div>						
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<button type="submit" onclick="mostrarRegistro()" class="btn btn-success">Agregar<span class="fa fa-desktop"></span></button>
						</div>
					</div>
					<?php
					 if ($result->num_rows > 0) {
						 ?>
					<table class="table table-responsive">
						<thead>
							<tr>
								<!--<th scope="col">#id</th>-->
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
					$sql = "SELECT e.id,e.nombre,t.nombre nombre_tipo,e.marca,e.modelo,e.sistemaOpe,e.ip,ubi.nombre nombre_ubicacion,edi.nombre nombre_edificio,ubi.id_ubi FROM equipo e,tipo t,edificio edi,ubicacion ubi where e.tipo=t.id_tipo and e.ubica=ubi.id_ubi and ubi.id_edificio=edi.id_edi ORDER BY e.nombre ASC ";
                    $result = $conn->query($sql);
				  
				   
                   while($row = $result->fetch_assoc()) {
          	                 ?>
                    <tr>
                       <td><?php echo $row['nombre']?></td>
					   <td><?php echo $row['nombre_tipo']?></th>
			           <td><?php echo $row['marca'] ?></td>
			           <td><?php echo $row['modelo']?></td>
			           <td><?php echo $row['sistemaOpe']?></td>
			           <td><?php echo $row['ip']?></td>
				   <td><button type="button"  onclick="mostrarEditar(<?php echo $row['id']?>,'<?php echo $row['nombre']?>','<?php echo $row['nombre_tipo']?>','<?php echo $row['marca']?>','<?php echo $row['modelo']?>','<?php echo $row['sistemaOpe']?>','<?php echo $row['ip']?>','<?php echo $row['nombre_ubicacion']?>','<?php echo $row['nombre_edificio']?>',<?php echo $row['id_ubi']?>)" title="editar!" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></td>
					    <td>
					   <button title="Borrar!" type="button"  class="btn btn-danger" onclick="borrarEquipo(<?php echo $row['id']?>)"><i class="icon-copy fi-x"></i></button>
					   </td>
					   <td>
					   <button title="Archivos!" type="button"   onclick="mostrarArchivos(<?php echo $row['id'];?>,'<?php echo $row['nombre'];?>')" class="btn btn-primary"><i class="icon-copy fa fa-file" aria-hidden="true"></i></button>
					   </td>
					   <td>
					   <button title="Backbones!" type="button"  onclick="mostrarBackbone(<?php echo $row['id'];?>,'<?php echo $row['nombre'];?>')" class="btn btn-primary"><i class="icon-copy fa fa-plus-square" aria-hidden="true"></i></button>
					   </td>

                       <?php
					   
					   
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
					<form></form>
				</div>
		</div>
		</div>
	</div>
	
 
	
	