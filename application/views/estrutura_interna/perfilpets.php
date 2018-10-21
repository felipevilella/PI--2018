<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
				
				<h4 class="card-title">Chihuahua</h4>
				
				<br>
				<p class="card-description">
					<div class="fotopetsperfil">
						<label>Responsavel:</label><br><br>
						<a href="#" id="perfilpets"><img class="img"  src="<?php echo base_url('assets/personalizado/imagem/card-profile1-square.jpg');?>"></a>
					</div>
			</div>
		</div>
				<div class="card card-profile">
						<div class="card-body">
							<label>Descrição: 
								<br><br>
								Espécie: <label id="especie"></label>
								<br><br>
								Raça:  <label id="raca"></label>
								<br><br>
								Idade: <label id="idade"></label>




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
									      <img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cao.jpg');?>" alt="First slide">
									    </div>
									    <div class="carousel-item">
									      <img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cao.jpg');?>" alt="Second slide">
									    </div>
									    <div class="carousel-item">
									      <img class="d-block w-100" src="<?php echo base_url('assets/personalizado/imagem/cao.jpg');?>" alt="Third slide">
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
							     <img src="assets/personalizado/imagem/cao.jpg" class="img-thumbnail">

							     <br><br>
							      <img src="assets/personalizado/imagem/cao.jpg" class="img-thumbnail">

							      <br><br>
							      <div class="ml-2">
							      <div class="img-thumbnail ">
							      
							     		<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  														<img src="assets/personalizado/imagem/add.png">
													</button>

														<!-- Modal -->
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
														         <!--Corpo do modal Snipp de drag and drop -->		    									<div class="ModalContainer">
																		<div class="row">
																		    <div class="col-md">
																		<label class=newbtn>
																		    <img id="blah" src="http://placehold.it/120x120" >
																		    <input id="pic" class='pis' onchange="readURL(this);" type="file" >
																		</label>
																		</div>
																		</div>
																	</div>
																	<script>
																	 
																	 $('.newbtn').bind("click" , function () {
																	        $('#pic').click();
																	 });
																	 
																	  function readURL(input) {
																	            if (input.files && input.files[0]) {
																	                var reader = new FileReader();

																	                reader.onload = function (e) {
																	                    $('#blah')
																	                        .attr('src', e.target.result);
																	                };

																	                reader.readAsDataURL(input.files[0]);
																	            }
																	        }
																	</script>
																	<style>


																	#pic{
																	     display: none;
																	       }
																	       
																	 .newbtn{
																	         cursor: pointer;
																	      }
																	      #blah{
																	  max-width:100px;
																	  height:100px;
																	  margin-top:20px;
																	}

																	</style>


														      </div>
														      <div class="modal-footer">
														        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
														        <button type="button" class="btn btn-primary">Salvar e Enviar</button>
														      </div>
														    </div>
														  </div>
														</div>
                    
                    </div>
                  </div>
                  
                </form>


							    </div>


							   		</div>	 
							   	<div id="sobrePet">	
							   			
							    <h3>Teste</h3>
							    <p>Lorem ipsum dolor asmet,Lorem ipsum dolor asmetLorem ipsum dolor asmet</p>
							  



							  </div>
							</div>
				
				<br>
			</div>
		</div>
	</div>
</div>
</div>


