
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" id="petselecao">
			<br><br>
			<h3>Selecione o seu pet</h3><hr>
			<div class="container">
				<div class="row">
					<?php  
					if(!empty($dadosPets)){
						$i = 0;
						foreach ($dadosPets as $pets) {
							if ($i < 4) {
								echo("<input type='hidden' id ='idPets".$i."' value ='".$pets["idanimais"]."'>");
								if(empty($pets["foto_principal"])) {
									echo"<div class='col-md-3'>
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a><br>
									</div>";
								} else {
									echo"<div class='col-md-3'>
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url("assets/personalizado/fotos_pets/".$pets["foto_principal"])."' /></a><br>
									</div>";
								}


								$i++;
							} else {
								if (empty($pets["foto_principal"])) {
									echo"<div class='col-md-3'>
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a><br>
									</div>";
								}
								else{
									echo"<div class='col-md-3'>
									<a href='#' id='perfilpets'>
									<img class='img' id='entrarperfilpets$i' src='".base_url('assets/personalizado/imagem/'.$pets["foto_principal"])."' /></a><br>
									</div>";
								}
							}
						}
						if($i<4){
							echo"
								<div class='col-md-3'>
								<a href='#' id='perfilpets'><img class='img' id='editarperfilpets' src=".base_url('assets/personalizado/imagem/add.jpg')." /></a>
								</div>";
						}
					}
					else{
						echo"
						<div class='col-md-3'>
						<a href='#' id='perfilpets'><img class='img' id='editarperfilpets' src=".base_url('assets/personalizado/imagem/add.jpg')." /></a>
						</div>";
					}

					?>
				</div>
			</div>
			
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
								<span id="erroNome"  class="errror"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Raça</label>
								<select id="raca" class="form-control">
									<option value = "" > Selecione uma opção </option>
									<?php
									foreach ($racaPets as $raca) {
										echo "<option value =".$raca["idracas"].">".$raca["nome"]."</option>";
									}
									?>
								</select>
							</div>
							<span id="erroRaca" class="errror"></span>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Peso</label>
								<input type="text" name="peso" id="peso" class="form-control" placeholder="">
							</div>
							<span id="erroPeso"  class="errror"></span>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Altura</label>
								<input type="text" name="altura" id="altura" class="form-control" placeholder="">
								<span id="erroAltura"  class="errror"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label id="contador_caracter">Ano de  nascimento</label>
								<input type="month" name="data" id="data" class="form-control" placeholder="" >
								<span id="erroAno" class="errror"></span>
							</div>
						</div>

						<div class="col-md-6">
								<label><font color="black">Sexo</font></label><br>
								<select id="sexo" class="form-control">
									<option value = "" >Selecione uma opção</option>
									<option value = "m" >Macho</option>
									<option value = "f" >Femea</option>
								</select>
								<label id="erroSexo" class="errror"></label>
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