
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white" id="navigation-example">
	<div class="container">
		<div class="navbar-wrapper">
			<a class="navbar-brand" href="<?php echo base_url("inicio");?>"><img src="<?php echo base_url("assets/personalizado/imagem/logo.png");?>" width="60%"></a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
			<span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end">


			<ul class="navbar-nav">


				<li class= "nav-item ">
					<a href="<?php echo base_url("cadastrar");?>" class="nav-link">
						<i class="material-icons">person_add</i>
						Cadastrar
					</a>
				</li>
				<li class= "nav-item ">
					<a href="<?php echo base_url("login");?>" class="nav-link">
						<i class="material-icons">person</i> 	
						Acessar
					</a>
				</li>
			</ul>         
		</div>
	</div>
</nav>

