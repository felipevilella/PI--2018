<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<img class="img" src="<?php echo ('assets/personalizado/imagem/cachoro.png');?>" />
					</a>
				</div>
				<h6 class="card-category text-gray">BOB</h6>

				<label> Recomendação pet</label><br>
				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo ('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo ('assets/personalizado/imagem/estrela.png');?>" />
				
				<h4 class="card-title">Chihuahua</h4><a href="#" id="editarperfilpets"><i class="material-icons">create</i>Editar</a></h5><hr>
				
				<br>
				<p class="card-description">
					<div class="fotopetsperfil">
						<label>Responsavel:</label><br><br>
						<a href="<?php echo base_url('perfiltreinador');?>" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/card-profile1-square.jpg');?>"></a>
					</div>
				</div>
			</div>
			<div class="card card-profile">
				<div class="card-body">
					<label>Descrição: 
						<br><br>
						<b>Espécie:</b> <label id="especie">Cachorro</label>
						<br><br>
						<b>Raça:</b>  <label id="raca">Chihuahua</label>
						<br><br>
						<b>Idade:</b> <label id="idade">5 anos</label>
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
										<div class="carousel-item active">
											<img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>" alt="First slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>" alt="Third slide">
										</div>
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
								<img src="assets/personalizado/imagem/cachoro.png" class="img-thumbnail">

								<br><br>
								<img src="assets/personalizado/imagem/cachoro.png" class="img-thumbnail">

								<br><br>
								<div class="ml-2">
									<div class="img-thumbnail ">
										<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
											<img src="<?php echo base_url('assets/personalizado/imagem/add.png');?>" width="100%">
										</button>

										<br>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div id="sobrePet">	

						<h3>Sobre o pet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium vulputate turpis ut tristique. Donec elit eros, aliquam maximus elementum id, lacinia vitae neque. Donec vel aliquet dui. Nulla facilisi. Vivamus ultrices quam mi, non elementum ipsum porttitor convallis. Sed in nibh ac lectus eleifend semper. Etiam vulputate risus ipsum, sed porta mi placerat ac. Nunc eu pulvinar justo. Etiam ac lobortis augue. Nullam laoreet aliquet lectus, nec varius tellus fringilla a. Nulla at vestibulum lacus. Donec congue ornare sodales.

						Curabitur dapibus, arcu sollicitudin pulvinar ornare, nisl libero convallis sapien, quis egestas dolor nunc non arcu. Curabitur blandit facilisis felis, id condimentum diam sagittis et. Vestibulum placerat sagittis justo sit amet cursus. Etiam sed ex diam. Morbi molestie dui at mi pulvinar semper. Nulla placerat, velit et ultrices porta, arcu felis ullamcorper dui, nec vestibulum risus dolor ut augue. Nam tortor ex, eleifend a ultrices ac, sodales sed ante. Aliquam dictum odio sit amet sapien facilisis, non dapibus sem luctus. Mauris a nulla sit amet odio bibendum mattis at ac felis. Curabitur a nibh a eros ultrices pretium. Donec vel justo eu purus cursus blandit.</p>




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
									<div class="row"> 
										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Nome</label>
												<input type="text" name="nome" id="nome" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Raça</label>
												<input type="text" name="raca" id="raca" class="form-control" placeholder="" disabled>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Peso</label>
												<input type="text" name="peso" id="peso" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Altura</label>
												<input type="text" name="altura" id="altura" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Data nascimento</label>
												<input type="date" name="data" id="data" class="form-control" placeholder="" disabled>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label id="contador_caracter">Sexo</label><br>
												<div class="form-check form-check-radio form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="macho"> Macho
														<span class="circle">
															<span class="check"></span>
														</span>
													</label>
												</div>
												<div class="form-check form-check-radio form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Femea"> Femea
														<span class="circle">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
								<button type="button" class="btn btn-primary">Salvar</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
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
												<img id="blah" src="http://placehold.it/120x120" >
												<input id="pic" class='pis' onchange="readURL(this);" type="file" >
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								<button type="button" class="btn btn-primary">Salvar e Enviar</button>
							</div>
						</div>
					</div>
				</div>
			</div>

