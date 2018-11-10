<br><br><br><br><br>
<?php echo "<input type='hidden' id='identificacao' value='".$usuarioDados["idUsuario"]."'>"?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card card-profile">
				<div class="card-body">
					<div class="card-avatar">
						<img class="img" src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" />
					</a>
				</div>
				<h6 class="card-category text-gray">Usuario</h6><br>

				<!-- ESTRELAS PERFIL -->
				<img class="img"  src="<?php echo base_url('assets/personalizado/imagem/estrela.png');?>" />
				
				<h4 class="card-title"><?php echo $usuarioDados["nome"];?></h4>
				<p class="card-description" >
					Olá meu nome é Mirian Alves e adoro animais de estimação.
				</p><br>
				<p class="card-description">
					<div class="fotopetsperfil">
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/ch.jpg');?>" /></a>
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
				<p id="Localizacao"> Belo Horizonte - MG </p>
				<p><b>Mapa</b></p>
			</div>
		</div>
	</div>
<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title-left">Fotos<a href="#" id="alterarperfil">
				<hr>
				<div class="row">
					<div class="col-md-12">
						<img  src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>"  width="30%" />
						<img  src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>"  width="30%"/>
						<img  src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" width="30%" />
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

</div>


