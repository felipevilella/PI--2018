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
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/card-profile1-square.jpg');?>"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card ">
				<div class="card-body">
					<p>
						<a class="btn btn-primary" data-toggle="collapse" href="#fotos" aria-expanded="false" aria-controls="collapseExample">
							Foto
						</a>
						<a class="btn btn-primary" data-toggle="collapse" href="#descricao" aria-expanded="false" aria-controls="collapseExample">
							Descrição
						</a>
					</p>
					<div class="collapse" id="fotos">
						<div class="card card-body">
							foto dos pets
						</div>
					</div>

					<div class="collapse" id="fotos">
						<div class="card card-body">
							foto dos pets
						</div>
					</div>

					<div class="collapse" id="descricao">
						<div class="card card-body">
							discrição dos pets
						</div>
					</div>

					<br>
				</div>
			</div>
		</div>
		
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
				
				<div class="form-group">
					<label id="contador_caracter">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control" placeholder="">
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
				<button type="button" class="btn btn-primary">Salvar</button>
			</div>
		</div>
	</div>
</div>

