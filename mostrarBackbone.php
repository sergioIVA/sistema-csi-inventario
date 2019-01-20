<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
			<?php

			$equipo=$_POST['id'];
            $nombre=$_POST['nombre'];

			
		include 'conexion/conexion.php';
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                 } 
            $sql = "SELECT * FROM backbone b ,equipo e where e.id=b.id_equipoRegistro and b.id_equipoRegistro='".$equipo."' ";
            $result = $conn->query($sql);

            ?>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				  <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h3>BackBones de Equipo: <?php echo $nombre;?></h3>
						</div>
					</div>
				</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
						<button type="submit" onclick="mostrarEquipos(<?php echo $equipo;?>,'<?php echo $nombre?>')" class="btn btn-primary">Volver<span class="fa fa-mail-reply-all"></span></button>
						
							<button type="button" onclick="mostrarRegistroBackbone(<?php echo $equipo; ?>,'<?php echo $nombre;?>')" class="btn btn-success">Agregar<span class="fa fa-plus-square"></span></button>
						
						</div>
					</div>
					<?php
					 if ($result->num_rows > 0) {
						 ?>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th scope="col">#id</th>
								<th scope="col">Puerto</th>
								<th scope="col">Equipo</th> 
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

                       <th scope="row" id="id"><?php echo $row['id_back']?></th>
                       <td><?php echo $row['puerto']?></td>
					   <td><?php echo $row['equipo']?></th>
					   <td><button type="button"  onclick="mostrarEditarBackbone(<?php echo $row['id_back'];?>,'<?php echo $row['puerto'];?>','<?php echo $row['equipo']?>','<?php echo $equipo;?>','<?php echo $nombre;?>')" title="editar!" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></td>
					    <td>
					   <button type="button"  class="btn btn-danger"  title="Eliminar!" onclick="eliminarBackbone(<?php echo $row['id_back']?>,<?php echo $equipo;?>,'<?php echo $nombre;?>')"><i class="icon-copy fi-x"></i></button>
					   </td>
                       <?php
                        }
				 
                        ?>
                     </tr>
               
                    <?php  
                      }	else{
						  
						?> 
                       <h5>No se encuentrar registrados backbones ! </h5>
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


	