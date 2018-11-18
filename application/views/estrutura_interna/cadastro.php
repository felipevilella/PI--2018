<br><br>
<br><br>
  <div class="container">
  <div class="row">
  <div class="col-md-3">
  </div>
<div class="col-md-6 card card-nav-tabs"" >

    <div class="card-success">
      <div class="form-group label-floating has-warning">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3><center><font color="black">Crie sua nova conta</font></center></h3>
              <h5><center><font color="green"><label id="retonoCadastro"></label></font></font></center></h5>
            </div>
            <div class="col-md-6">
              <label><font color="black">Nome</font></label><br>
              <input type="text" class="form-control"  placeholder="" id="nome" >
              <label id="erroNome" class="errror"></label>
            </div>
            <div class="col-md-6">
              <label><font color="black">Sobrenome</font></label><br>
              <input type="text" class="form-control"  placeholder="" id="sobrenome" >
              <label id="erroSobrenome" class="errror"></label>
            </div>
            <div class="col-md-6">
              <label><font color="black">Estado</font></label><br>
              <select id="estadoBuscar" class="form-control">
                <option selected>Selecione uma opção</option>
                <?php foreach ($estado as $dadosEstados){
                    echo "<option value='".$dadosEstados["idestado"]."''>".$dadosEstados["nome"]."</option>";
                  } 
                ?>
                 </select>
                 <label id="erroEstado" class="errror"></label>  
              </div>
              <div class="col-md-6">
                <label><font color="black">Cidade</font></label><br>
                <select id="Cidade" class="form-control">
                  <option selected>Selecione uma opção</option>
                </select>
                 <label id="erroCidade" class="errror"></label>
              </div>
              <div class="col-md-12">
                <label><font color="black">Email</font></label><br>
                <input type="text" class="form-control"  placeholder="" id="email" >
                 <label id="erroEmail" class="errror"></label>
              </div>
              <div class="col-md-12">
                <label><font color="black">Senha</font></label><br>
                <input type="password" class="form-control"  placeholder="" id="password" >
                 <label id="erroSenha" class="errror"></label>
              </div>
              <div class="col-md-12">
                <label><font color="black">Confirmação de senha</font></label><br>
                <input type="password" class="form-control"  placeholder="" id="password1" >
              </div>
               <div class="col-md-12" id="senharetorno">
               <label id="retornosenha"></label>
              </div>

              <div class="col-md-4">
                <br>
                 <input type="button"  class="btn btn-warning" id="Cadastrar" value = "Cadastrar">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

