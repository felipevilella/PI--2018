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
				<br><a href="#" id="inserirfotoPets"><i class="material-icons">create</i>Editar</a></h5>
				<h6 class="card-category text-gray"><?php echo $dadosPets["nome"];?></h6>
				<h6 class="card-category text-black"><?php 
				if ($dadosPets["sexo"] == "m") {
					echo "Macho";
				} else {
					echo "Femea";
				}

				?></h6><hr>

				
				<h4 class="card-title"><?php echo $dadosPets["racaAnimal"];?> </h4><a href="#" id="editarperfilpets"><i class="material-icons">create</i>Editar</a></h5><hr>
				
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
						<a href="<?php echo base_url("perfiltreinador/$idUsuario");?>"><?php
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
												<div class="ml-2">
													<div class="img-thumbnail ">
														<a href="#" id="adicionarfotospets">
															<img src="<?php echo base_url('assets/personalizado/imagem/add.png');?>" width="100%">
														</a>

														<br>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div id="sobrePet">	

										<h3>Sobre o pet <a href="#" id="sobreperfilpets"><i class="material-icons">create</i></a></h3>
										<p><?php echo $dadosPets["descricao"];?></p>

									</div>
								</div>



								<div class="modal fade" id="modalalteracaopets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>

												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="container">
													<label class="sucesso" id="mensagemAlteracao"></label>
													<div class="row"> 
														<div class="col-md-6">
															<div class="form-group">
																<label id="contador_caracter">Nome</label>
																<input type="text" name="nome" value="<?php echo($dadosPets['nome'])?>" id="nome" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label id="contador_caracter">Raça</label>
																<input type="text" name="raca" id="raca" value="<?php echo($dadosPets['racaAnimal'])?>" class="form-control" placeholder="" disabled>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label id="contador_caracter">Peso</label>
																<input type="text" name="peso" id="peso" value="<?php echo($dadosPets['peso'])?>" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label id="contador_caracter">Altura</label>
																<input type="text" name="altura" id="altura"  value="<?php echo($dadosPets['altura'])?>" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label id="contador_caracter">ano nascimento</label>
																<input type="text" name="data" id="data" class="form-control" value="<?php echo($dadosPets['ano_nascimento'])?>" placeholder="" disabled>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
													<button type="button" class="btn btn-warning" id = "editarinformacaopets">Salvar</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<form action="<?php echo base_url('inserirfotoPets');?>" method="post" enctype="multipart/form-data">
													<?php
													echo "<input type='hidden' name ='idpets' value =".$idpets.">";
													?> 
													<h5 class="modal-title" id="exampleModalLongTitle">Adicionar Fotos</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="ModalContainer">
														<div class="row">
															<div class="col-md">
																<label class=newbtn>
																	<img id="blah" src="http://placehold.it/400x400" >
																	<input id="pic" class='pis'  name="fotopet" onchange="readURL(this);" type="file" >
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
													<button type="submit" class="btn btn-warning">Salvar e Enviar</button>
												</div>
											</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="perfilfotopets" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<form action="<?php echo base_url('salvarFotopets');?>" method="post" enctype="multipart/form-data">
												<?php
												echo "<input type='hidden' name ='idpets' id='idpets' value =".$idpets.">";
												?>
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Adicionar Fotos</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="ModalContainer">
														<div class="row">
															<div class="col-md">
																<label class=newbtn>
																	<img id="blah" src="http://placehold.it/400x400" >
																	<input id="pic" class='pis'  name="fotopetsperfil" onchange="readURL(this);" type="file" >
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
													<button type="submit" class="btn btn-warning" >Salvar e Enviar</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="alterardescricao" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<?php
										echo "<input type='hidden' name ='idpets' value =".$idpets.">";
										?> 
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Adicionar Sobre</h5>
										</div>
										<div class="modal-body">
											<textarea class="form-control" placeholder="Descreva a caracteristica do seu animal" id="sobretexto"></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
											<button type="button" class="btn btn-warning" id="atualizarDescricacao" >Salvar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
