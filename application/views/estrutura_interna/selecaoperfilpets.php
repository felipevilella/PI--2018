
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" id="petselecao">
			<br><br>
			<h3>Selecione o seu pet</h3><hr>
			<a href="<?php echo base_url("perfilpets");?>" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>"></a>
			
			<a href="#" id="perfilpets "><img class="img" id="editarperfilpets" src="<?php echo base_url('assets/personalizado/imagem/add.jpg');?>" /></a>
		</div>
	</div>
</div>

<div class="modal fade" id="modalalteracaopets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastre o seu pet</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row"> 
						<label id="mensagem_retorno"></label>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Nome</label>
								<input type="text" name="nome" id="nome" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Raça</label>
								<input type="text" name="raca" id="raca" class="form-control" placeholder="" >
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
								<input type="date" name="data" id="data" class="form-control" placeholder="" >
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Sexo</label><br>
								<div class="form-check form-check-radio form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo" value="macho"> Macho
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
								<div class="form-check form-check-radio form-check-inline">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo" value="Femea"> Femea
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
				<button type="button" class="btn btn-primary" id="cadastrarpets">Salvar</button>
			</div>
		</div>
	</div>
</div>