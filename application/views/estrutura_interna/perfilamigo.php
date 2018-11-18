<br><br><br><br><br>
<?php echo "<input type='hidden' id='identificacao' value='".$dadosusuarioamigo["idUsuario"]."'>"?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<?php
						if (empty($dadosusuarioamigo["foto_principal"])) {
							echo "<img class='img' src=".base_url('assets/personalizado/imagem/avatar.jpg').">";
						} else {
							echo "<img class='img' src='".base_url("assets/personalizado/fotos_pets/".$dadosusuarioamigo["foto_principal"])."'>";
						}
						?>
					</a>
				</div>
				<h6 class="card-category text-gray">Treinador</h6><br>

				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				
				<h4 class="card-title"><?php echo $dadosusuarioamigo["nome"];?></h4>
				<p class="card-description" >
					Olá meu nome é <?php echo $dadosusuarioamigo["nome"];?> e adoro animais de estimação.
				</p><br>
				<p class="card-description">
					<div class="fotopetsperfil">
						<?php  
						if(!empty($dadosPets)){
							$i = 0;
							foreach ($dadosPets as $pets) {
								if ($i < 4) {
									echo("<input type='hidden' id ='idPets".$i."' value ='".$pets["idanimais"]."'>");
									echo("<input type='hidden' id ='idUsuarioAmigo' value ='".$dadosusuarioamigo["idUsuario"]."'>");
									if(empty($pets["foto_principal"])) {
										echo"
										<a href='#' id='perfilpets'>
										<img class='img' id='entrarperfilpetsamigo$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a>
										</div>";
									} else {
										echo"
										<a href='#' id='perfilpets'>
										<img class='img' id='entrarperfilpetsamigo$i' src='".base_url("assets/personalizado/fotos_pets/".$pets["foto_principal"])."' /></a>
										";
									}

									$i++;
								} else {
									if (empty($pets["foto_principal"])) {
										echo"
										<a href='#' id='perfilpets'>
										<img class='img' id='entrarperfilpetsamigo$i' src='".base_url('assets/personalizado/imagem/cachoro.png')."' /></a>";
									}
								}
							}
						}
						?>
					</p>
				</a>
			</p>
			<br>
			<button class="btn btn-warning" id="Solicitar">Solicitar contato</button>
		</div>
	</div>
</div>

</div>
<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title-left"> Detalhes do perfil </h5><hr>
			<p><b>Localização</b></p>
			<p id="Localizacao"> <?php  echo  $dadosusuarioamigo["nomeCidade"]."/".$dadosusuarioamigo["nomeEstado"]; ?> </p>
			<p><b>Mapa</b></p>
		</div>
	</div>
</div>
</div>


