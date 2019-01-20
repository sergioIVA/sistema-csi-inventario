<!--<div class="pre-loader"></div>-->
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="" alt="" class="">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php
						if(isset($_SESSION['usuario'])){
							echo $_SESSION['usuario'];
						}else{
							
								echo "csi";
						}
					
							?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="cerrarSession.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Session</a>
					</div>
				</div>
			</div>
		</div>
	</div>