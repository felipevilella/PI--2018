   <nav class="navbar navbar-expand-lg bg-dark navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
              <a class="navbar-brand" href="<?php echo base_url("perfiltreinador");?>"><img src="<?php echo base_url("assets/personalizado/imagem/logo.png");?>" width="50%"></a>
   </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
            
            <form  action ="pesquisa" class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Pesquisar..">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li>&nbsp&nbsp Olá <?php echo($nome);?> &nbsp&nbsp</li>
               <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">message</i>
                  <span class="notification">1</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="verconversa">
                  <img src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" width="60px" class="img-circle img-raised foto">&nbsp Olá tudo bem? </a>
                  <a href="<?php echo("chatCompleto");?>"><input class="btn btn-warning" value="Ver todas as conversas"></a>  
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">1</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="verconversa">
                  <img src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" width="60px" class="img-circle img-raised foto">&nbsp Mirian solicitou uma conversa</a>
                </div>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('login');?>" id="verconversa">Sair</a>
                </div>
              </li>

              
            </ul>
          </div>
        </div>
      </nav>
 