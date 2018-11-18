<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<?php
						if (empty($dadosusuario["foto_principal"])) {
							echo "<img class='img' src=".base_url('assets/personalizado/imagem/avatar.jpg').">";
						} else {
							echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosusuario["foto_principal"])."'>";
						}
						?>
					</a>
				</div>
				<h6 class="card-category text-gray">Treinador</h6><a href="#" id="alterarfotousuario"><i class="material-icons">create</i>Editar</a></h5><br>

				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				
				<h4 class="card-title"><?php echo $nome; ?></h4>
				<p class="card-description" >
					Olá meu nome é <?php echo $nome;?> e adoro animais de estimação.<!-- <a href="#" id="descricao"><i class="material-icons">create</i>editar</a> -->
					
				</p>
				<p class="card-description">
					<div class="fotopetsperfil">
						<?php  
					if(!empty($dadosPets)){
						$i = 0;
						foreach ($dadosPets as $pets) {
							if ($i < 4) {
								echo("<input type='hidden' id ='idPets".$i."' value ='".$pets["idanimais"]."'>");
								if(empty($pets["foto_principal"])) {
									echo"
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a>
									</div>";
								} else {
									echo"
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url("assets/personalizado/fotos_pets/".$pets["foto_principal"])."' /></a>
									";
								}
								$i++;
							} else {
								if (empty($pets["foto_principal"])) {
									echo"
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a>";
								}

							}
						}
					}

					?>
				</p>
				<br>
			</div>
		</div>
	</div>
	
</div>
<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title-left"> Detalhes do perfil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" id="alterarperfil"><i class="material-icons">create</i>Editar</a></h5><hr>

			<p><b>Localização</b></p>
			<p id="Localizacao"> <?php echo $dadosusuario["nomeCidade"]."/".$dadosusuario["nomeEstado"];?> </p>
			<p><b>Mapa</b></p>
		</div>
	</div>
</div>



<!-- Modals -->

<div class="modal fade" id="modaldescricao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Descrição</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label id="contador_caracter">Faça uma breve descrição</label>
					<textarea class="form-control" id="textDescricao" placeholder="" maxlength="200" rows="3"></textarea>
					<span id="limitecaracter">200</span>
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
				<button type="button" class="btn btn-warning">Salvar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade alterarfoto_usuario " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<form action="<?php echo base_url('alterarFotoUsuario');?>" method="post" enctype="multipart/form-data">
					<?php 
						echo "<input type ='hidden' name='idusuario' value='".$idusuario."'>";
					?>
				<h5 class="modal-title" id="exampleModalLongTitle">Alterar Foto</h5>
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
								<input id="pic" class='pis' name = 'fotousuarioperfil' onchange="readURL(this);" type="file" >
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-warning">Salvar </button>
			</div>
		</form>

		</div>
	</div>
</div>

<div class="modal fade editarinformacaousuario " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detalhes perfil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<label><font color="black">Nome</font></label><br>
							<input type="text" class="form-control"  placeholder="" id="nome" >
						</div>
						<div class="col-md-6">
							<label><font color="black">Sobrenome</font></label><br>
							<input type="text" class="form-control"  placeholder="" id="sobrenome" >
						</div>
						<div class="col-md-6">
							<label><font color="black">Estado</font></label><br>
							<select id="inputState" class="form-control">
								<option selected>Selecione uma opção</option>
								<option value="1">Minas Gerais</option>
								<option value="2">São Paulo</option>
								<option value="3">Rio de Janeiro</option>              </select>
							</div>
							<div class="col-md-6">
								<label><font color="black">Cidade</font></label><br>
								<select id="inputState" class="form-control">
									<option selected>Selecione uma opção</option>
									<option value="1">Belo Horizonte</option>
									<option value="2">São Paulo</option>
									<option value="3">Rio de Janeiro</option>
								</select>
							</div> 
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-warning">Salvar </button>

				</div>
			</div>
		</div>
	</div>


	<div class="modal fade pets_perfil_modal " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<img class="img"  src="<?php echo ('assets/personalizado/imagem/cachoro.png');?>">
				<div class="">			
					<button class="btn btn-warning col-md-12" id="entrarperfilpets">Entrar no perfil</button>
				</div>
			</div>

		</div>
	</div>




	<div class="modal fade adicionar_pets_perfil" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<p class="card-description"><p align="center">Selecione o seu pet</p>
				<div class="fotospetsperfil center">
					<a href="#" id=""><img class="img"  src="<?php echo ('assets/personalizado/imagem/cachoro.png');?>"></a>
					<a href="#" id=""><img class="img"  src="<?php echo ('assets/personalizado/imagem/cao.jpg');?>" /></a>
					<a href="#" id=""><img class="img"  src="<?php echo ('assets/personalizado/imagem/ch.jpg');?>" /></a>
					<a href="#" id=""><img class="img"  src="<?php echo ('assets/personalizado/imagem/ch.jpg');?>" /></a>
				</div>
			</a>
		</p>
	</div>
</div>
</div>

