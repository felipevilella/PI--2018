<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<img class="img" src="<?php echo ('assets/personalizado/imagem/card-profile1-square.jpg');?>" />
					</a>
				</div>
				<h6 class="card-category text-gray">Treinador</h6>

				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo ('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo ('assets/personalizado/imagem/estrela.png');?>" />
				
				<h4 class="card-title">Alec Thompson</h4>
				<p class="card-description" >
					Olá meu nome é Alec Thompson e adoro animais de estimação.<a href="#" id="descricao"><i class="material-icons">create</i>editar</a>
				</p>
				<p class="card-description">
					<div class="fotopetsperfil">
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>"></a>
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/cao.jpg');?>" /></a>
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/ch.jpg');?>" /></a>
						<a href="#" id="adicionar_pets"><i class="material-icons">add</i></a>
					</a>
				</p>
				<br>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title-left"> Detalhes do perfil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" id="addpetsperfil"><i class="material-icons">create</i>Editar</a></h5><hr>

				<p><b>Localização</b></p>
				<p id="Localizacao"> Belo Horizonte - MG </p>
				<p><b>Mapa</b></p>
			</div>
		</div>
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
				<button type="button" class="btn btn-primary">Salvar</button>
			</div>
		</div>
	</div>
</div>




<div class="modal fade pets_perfil_modal " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<img class="img"  src="<?php echo ('assets/personalizado/imagem/cachoro.png');?>">
			<div class="">			
				<button class="btn btn-primary col-md-12" id="entrarperfilpets">Entrar no perfil</button>
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