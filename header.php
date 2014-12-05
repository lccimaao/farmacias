		<div class="container">
			
			<header class="clearfix">
				<!--Titulo-->
				<span>Lo mismo pero más barato</span>
				<h1>Farmacias Similares</h1>
			</header>	
			
		<!--Div menu-->	
		<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="#">Hogar</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Inicio</h4>
										<ul>
											<li><a href="index.php">Volver a hogar</a></li>		
										</ul>
																
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Conócenos</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Nuestra compañia</h4>
										<ul>
											<li><a href="conocenos.php">¿Quiénes somos?</a></li>		
										</ul>
																
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Productos</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Medicamentos</h4>
										<ul>
											
											<?php $categorias = mysql_query("SELECT * FROM categorias");
											
											while ($fila = mysql_fetch_array($categorias)){
											
												echo "<li><a href='productos.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a></li>";
											
											};
											
											 ?>
															
										</ul>
									</div>
									
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
					
						<li>
							<a href="#">Contáctanos</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Redes sociales</h4>
										<ul>
											<li><a href="https://www.facebook.com/FarmaciasSimilares" target="_blank">Facebook</a></li>
											<li><a href="https://twitter.com/fsimilares" target="_blank">Twitter</a></li>
											<li><a href="https://www.youtube.com/channel/UC_rxdnyzupsXt6xmzw4MuLw" target="_blank">YouTube</a></li>
									</div>
									<div>
										<h4>Donde comprar</h4>
										<ul>
											<li><a href="puntos-de-venta.php">Puntos de venta</a></li>
										</ul>
									</div>
									
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
					</ul>
				</nav>
			</div>
		</div>