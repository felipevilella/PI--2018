<br><br><br><br><br><br><br><br>
<div class="container">
  <div class="row">
   <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto ">
    <div class="card card-nav-tabs">
      <div class="card-header card-warning">
        Acesso
      </div>
      <div class="card-body">
        <label id="retorno"></label><br>
        <label>E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
        <label>Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
        <a href="#" id="esqueci">Esqueci ou nao tenho a senha</a><br><br>

        <input type="" id = "Entrar" value="Entrar" class="btn btn-warning">
      </div>

    </div>
    <!-- Modals -->

<div class="modal fade" id="recuperarsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
          <label id="contador_caracter">E-mail</label>
         <input type="email" id="emailesquecisenha" class="form-control" placeholder="Digite o seu e-mail">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-warning">Enviar</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
