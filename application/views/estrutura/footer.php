
  <div class="container">
    <div id="chatbox" class="hidden">
      <div id="friendslist">
        <div id="topmenu">
          <span class="friends">Contatos</span>
        </div>

        <div id="friends">

          <div class="friend w3layouts">
          <img src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" >
            <p>
              <strong>Mirian </strong>
            </p>
            <div class="status available"></div>
          </div>
        </div>

      </div>

      <div id="chatview" class="p1">

        <div id="profile">
          <div id="close">
            <div class="cy"></div>
            <div class="cx"></div>
          </div>
          <p>Mirian</p>
          <span></span>
        </div>

        <div id="chat-messages">

          <label>Segunda</label>

          <div class="message w3layouts">
             <a href="<?php echo base_url("perfilusuario");?>"> <img src="<?php echo ('assets/personalizado/imagem/avatar.jpg');?>" ></a>
            <div class="bubble">
              Ola tudo bem?
              <span>4 min</span>
            </div>
          </div>

          <div class="message right agileits">
            <img src="<?php echo ('assets/personalizado/imagem/card-profile1-square.jpg');?>">
            <div class="bubble">
              Sim e vc?
              <span>3 min</span>
            </div>
          </div>


        </div>

        <div id="sendmessage">
          <input type="text" placeholder="Digite a mensagem...">
          <button id="enviar"> </button>
        </div>

      </div>

    </div>

  </div>





  <script src="<?php echo base_url('assets/bootstrap/js/core/jquery.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/core/popper.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/core/bootstrap-material-design.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/chartist.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugins/bootstrap-notify.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/material-dashboard.min.js?v=2.1.0');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/personalizado/js/sistema.js');?>"></script>
 
    <script src="<?php echo base_url('assets/personalizado/js/tabs.js');?>"></script>
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>