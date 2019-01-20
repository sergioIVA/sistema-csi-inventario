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
            $sql = "SELECT * from equipo e ,mantenimientos m where e.id=m.equipo and e.id='".$id."'";
            $result = $conn->query($sql);
			
	

            ?>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				 <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h3>Mantenimientos del Equipo: <?php echo $nombre;?></h3>
						</div>
					</div>
				</div>
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<div class="pull-right">
							<a class="btn btn-success" href="registrarMantenimientoIndividual.php?id=<?php echo $id;?>&nombre=<?php echo $nombre;?>">Registrar<span class="fa fa-desktop"></span></a>
						</div>
						<div class="pull-right">
						<button type="submit" onclick="equiposMantenimiento()" class="btn btn-primary">Volver<span class="fa fa-mail-reply-all"></span></button>
						</div>
					</div>
					<?php
					
					
					 if ($result->num_rows > 0) {
						 ?>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th scope="col">#id</th>
								<th scope="col">Equipo</th>
								<th scope="col">Fecha</th> 
								<th scope="col">Hora Inicio</th>
								<th scope="col">Hora Final</th>
								<th scope="col">Descripcion</th>
							</tr>
						</thead>
						<tbody>
							<?php
				  
                   while($row = $result->fetch_assoc()) {
          	                 ?>
                    <tr>

                       <th scope="row" id="id"><?php echo $row['id_mante']?></th>
                       <td><?php echo $row['nombre']?></td>
					   <td><?php echo $row['fecha']?></th>
			           <td><?php echo $row['hora_inic'] ?></td>
			           <td><?php echo $row['hora_f']?></td>
			           <td><?php echo $row['descripcion']?></td>
					   <td>
					    <td>
					   <button type="button"  title="Borrar!" class="btn btn-danger" onclick="borrarMantenimiento(<?php echo $row['id_mante']?>,<?php echo $row['id'];?>,'<?php echo $row['nombre']; ?>')"><i class="icon-copy fi-x"></i></button>
					   </td>
					  
                       <?php
                        }
				 
                        ?>
                     </tr>
               
                    <?php  
                      }	else{
						  
						?> 
                       <h5>No se encuentrar registrados mantenimientos  de este equipo! </h5>
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
	
   