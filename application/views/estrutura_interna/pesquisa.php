<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12">
								<label><font color="black">Selecione o seu pet</font></label><br>
								<select id="pets" class="form-control">
									<option selected>Selecione uma opção</option>
									<?php foreach ($dadosPets as $pets) {
										echo "<option value='".$pets["idanimais"]."''>".$pets["nome"]."</option>";
									}
									?>
								</select>

								<label><font color="black">Estado</font></label><br>
								<select id="estadoBuscar" class="form-control">
									<option selected>Selecione uma opção</option>
									<?php foreach ($estado as $dadosEstados){
										echo "<option value='".$dadosEstados["idestado"]."''>".$dadosEstados["nome"]."</option>";
									} 
									?>
								</select>
								
								
								<label><font color="black">Cidade</font></label><br>
								<select id="Cidade" class="form-control">
									<option selected>Selecione uma opção</option>
								</select>
								
							</div>
							<div class="col-md-12">
								<button type="button" id="buscarPets" class="btn btn-warning"> Pesquisar</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<a href="#"><i class="material-icons">keyboard_arrow_left</i><br>Anterior<br></a>
							</div>
							<div class="col-md-8">
								<center><h3><label id="nomePetsPesquisa">   </label></h3></center>
								<div id="fotopesquisapet">
									<img  src="<?php echo base_url('assets/personalizado/imagem/cachoro.png');?>" width="100%">
								</div>
								
								<br><br>
								<div class="foto1" id="fotoPerfilUsuarioPets">
									<img  src="<?php echo base_url('assets/personalizado/imagem/avatar.jpg');?>"  >
								</div>
								<a href=""><i class="material-icons">done</i>Solicitar encontro</a>&nbsp&nbsp&nbsp
								<a href=""><i class="material-icons">highlight_off</i>Não solicitar encontro</a>
							</div>
							<div class="col-md-2">
								<a href="#"><i class="material-icons">keyboard_arrow_right</i><br>Proximo</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>