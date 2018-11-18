<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<?php
						if (empty($dadosPets["foto_principal"])) {
							echo "<img class='img' src=".base_url('assets/personalizado/imagem/cachoro.png').">";
						} else {
							echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosPets["foto_principal"])."'>";
						}  
						?>
					</a>
					
				</div>
				<h6 class="card-category text-gray"><?php echo $dadosPets["nome"];?></h6>
				<h6 class="card-category text-black"><?php 
				if ($dadosPets["sexo"] == "m") {
					echo "Macho";
				} else {
					echo "Femea";
				}

				?></h6><hr>

				
				<h4 class="card-title"><?php echo $dadosPets["racaAnimal"];?> </h4><hr>
				
				<br>
				<label> Recomendação pet</label><br>
				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				
				<p class="card-description">
					<div class="fotopetsperfil">
						<label>Responsavel:</label><br><br>
						<?php $idUsuario = $dadosusuario["idUsuario"];?>
						<a href="<?php echo base_url("perfilusuario/$idUsuario");?>"><?php
						if (empty($dadosusuario["foto_principal"])) {
							echo "<img class='img' src=".base_url('assets/personalizado/imagem/avatar.jpg').">";
						} else {
							echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosusuario["foto_principal"])."'>";
						}
						?></a>
					</div>
				</div>
			</div>
			<div class="card card-profile">
				<div class="card-body">
					<label>Descrição: 
						<br><br>
						<b>Espécie:</b> <label id="especie">Cachorro</label>
						<br><br>
						<b>Raça:</b>  <label id="raca"><?php echo $dadosPets["racaAnimal"];?></label>
						<br><br>
						<b>Idade:</b> <label id="idade"><?php echo  date("Y") - $dadosPets["ano_nascimento"] ;?> ano (s) </label>
					</label>
				</div>

			</div>
		</div>
		<div class="col-md-8">
			<div class="card ">
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-9">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<?php 
										$cont = 0;
										foreach ($buscarFotosPets as $fotopets): ?>
											<?php if($cont <3 ) { ?>
												<?php if($cont == 0) { ?>
													<div class="carousel-item active">
														<img class="d-block w-100" src="<?php echo base_url("assets/personalizado/fotos_pets/".$fotopets["diretorio"]."");?>" alt="First slide">
													</div>
												<?php } else { ?>
													<div class="carousel-item">
														<img class="d-block w-100" src="<?php  echo base_url("assets/personalizado/fotos_pets/".$fotopets["diretorio"]."");?>" alt="Second slide">
													</div>
												<?php } } $cont++ ;  endforeach ?>
												<?php if($cont == 0){?>
													<div class="carousel-item active">
														<img class="d-block w-100" src="<?php  echo base_url('assets/personalizado/imagem/ch.jpg');?>" alt="Second slide">
													</div>
												
												<?php } ?>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Anterior</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Proximo</span>
											</a>
										</div>
									</div>
									<div class="col-sm-3">
										<?php 
										$cont = 0;
										foreach ($buscarFotosPets as $fotopets): ?>
											<?php if($cont <3 ) { ?>
												<?php if($cont < 3) { ?>
													<img class="d-block w-100" src="<?php echo base_url("assets/personalizado/fotos_pets/".$fotopets["diretorio"]."");?>" class="img-thumbnail">

													<br><br>

												<?php } } $cont++ ;  endforeach ?>

											</div>

										</div>
									</div>
									<div id="sobrePet">	

										<h3>Sobre o pet <a href="#" id="sobreperfilpets"></h3>
										<p><?php echo $dadosPets["descricao"];?></p>

									</div>
								</div>


